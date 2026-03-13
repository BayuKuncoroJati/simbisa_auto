<?php

use App\Models\Booking;
use App\Models\JenisServis;
use App\Models\Kendaraan;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component
{
    #[Validate('required|unique:bookings,kode_booking')]
    public $kode_booking;

    #[Validate('required')]
    public $role = 'customer';

    #[Validate('required', message: 'Nama tidak boleh kosong!')]
    public $nama = '';

    #[Validate('required', message: 'Email tidak boleh kosong!')]
    #[Validate('email:dns', message: 'Penulisan email tidak benar!')]
    public $email = '';

    #[Validate('required', message: 'Nomor hp tidak boleh kosong!')]
    public $phone = '';

    public $password = '';

    #[Validate('required', message: 'Pilih jenis kendaraan anda!')]
    public $model_kendaraan = '';

    #[Validate('required', message: 'Pilih jenis servis anda!')]
    public $id_jenis_servis = '';

    #[Validate('required', message: 'Nomor polisi tidak boleh kosong!')]
    public $nomor_plat;

    #[Validate('required', message: 'Pilih tanggal booking anda!')]
    public $tanggal;

    #[Validate('required', message: 'Pilih jam booking anda!')]
    public $jam = '';

    #[Validate('required', message: 'Catatan keluhan tidak boleh kosong!')]
    public $catatan_keluhan;

    public $cars = [];

    public $services = [];

    public function mount()
    {
        $this->cars = Kendaraan::get([
            'id_kendaraan',
            'model',
        ]);

        $this->services = JenisServis::get([
            'id_jenis_servis',
            'nama_servis',
        ]);

        $this->kode_booking = $this->generateKodeBooking();
    }

    private function generateKodeBooking()
    {
        do {
            $kode = 'BK-' . Str::upper(Str::random(6));
        } while (Booking::where('kode_booking', $kode)->exists());

        return $kode;
    }

    public function createBookingUser()
    {
        // dd($this->validate());
        $this->validate();

        try {

            $tanggalBooking = Carbon::parse($this->tanggal . ' ' . $this->jam);

            DB::transaction(function () use ($tanggalBooking) {

                $jumlah = Booking::whereDate('tanggal_booking', $tanggalBooking->toDateString())
                    ->whereTime('tanggal_booking', $tanggalBooking->format('H:i:s'))
                    ->lockForUpdate()
                    ->count();

                if ($jumlah >= 3) {
                    throw new \Exception('Slot pada jam ini sudah penuh.');
                }

                $user = User::create([
                    'role' => $this->role,
                    'nama' => $this->nama,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'password' => $this->password,
                ]);

                Booking::create([
                    'kode_booking' => $this->kode_booking,
                    'id_user' => $user->id_user,
                    'id_kendaraan' => $this->model_kendaraan,
                    'id_jenis_servis' => $this->id_jenis_servis,
                    'nomor_plat' => $this->nomor_plat,
                    'tanggal_booking' => $tanggalBooking,
                    'status' => 'pending',
                    'catatan_keluhan' => $this->catatan_keluhan,
                ]);
            });

            $this->reset();
            session()->flash('success', 'Jadwal servis anda berhasil dibuat.');
            $this->dispatch('booking-created');
        } catch (\Exception $e) {

            session()->flash('error', $e->getMessage());
        }
    }

    #[On('booking-created')]
    public function refreshPage()
    {
        sleep(5);
        $this->redirectRoute('app');
    }
};

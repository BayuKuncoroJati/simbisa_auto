<div class="fi-section-content p-4">

    {{-- TABLE DETAIL --}}
    <table class="fi-ta-table w-full text-sm table-auto">
        <tbody class="divide-y">

            <tr>
                <td class="py-2 font-medium">Kode Booking</td>
                <td>{{ $record->kode_booking }}</td>
            </tr>

            <tr>
                <td class="py-2 font-medium">Nama Customer</td>
                <td>{{ $record->user?->nama }}</td>
            </tr>

            <tr>
                <td class="py-2 font-medium">Nomor Customer</td>
                <td>{{ $record->user?->phone }}</td>
            </tr>

            <tr>
                <td class="py-2 font-medium">Brand Kendaraan</td>
                <td>{{ $record->kendaraan?->brand }}</td>
            </tr>

            <tr>
                <td class="py-2 font-medium">Model Kendaraan</td>
                <td>{{ $record->kendaraan?->model }}</td>
            </tr>

            <tr>
                <td class="py-2 font-medium">Nomor Plat</td>
                <td>{{ $record->nomor_plat }}</td>
            </tr>

            <tr>
                <td class="py-2 font-medium">Tanggal Booking</td>
                <td>
                    {{ \Carbon\Carbon::parse($record->tanggal_booking)->format('H:i, d M Y') }}
                </td>
            </tr>

            <tr>
                <td class="py-2 font-medium">Status</td>
                <td>
                    <x-filament::badge :color="match ($record->status) {
                        'pending' => 'warning',
                        'approved' => 'info',
                        'rejected' => 'danger',
                        'completed' => 'success',
                    }">
                        {{ ucfirst($record->status) }}
                    </x-filament::badge>
                </td>
            </tr>

            <tr>
                <td class="py-2 font-medium"></td>
                <td>
                </td>
            </tr>

        </tbody>
    </table>

    {{-- CATATAN KELUHAN DI BAWAH --}}
    <div class="mt-8 border-t pt-6">

        <h3 class="text-center font-semibold text-base mb-4">
            Catatan Keluhan:
        </h3>

        <div class="bg-gray-50 rounded-lg p-4 whitespace-pre-wrap break-all text-justify">
            {{ $record->catatan_keluhan }}
        </div>

    </div>

</div>

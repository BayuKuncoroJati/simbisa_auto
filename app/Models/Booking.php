<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    protected $primaryKey = 'id_booking';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'kode_booking',
        'id_user',
        'id_kendaraan',
        'id_jenis_servis',
        'nomor_plat',
        'tanggal_booking',
        'status',
        'catatan_keluhan',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class, 'id_kendaraan', 'id_kendaraan');
    }
    public function jenis_servis(): BelongsTo
    {
        return $this->belongsTo(JenisServis::class, 'id_jenis_servis', 'id_jenis_servis');
    }
    public function booking_detail(): HasOne
    {
        return $this->hasOne(BookingDetail::class, 'id_booking', 'id_booking');
    }

    protected $casts = [
        'tanggal_booking' => 'datetime',
    ];
}

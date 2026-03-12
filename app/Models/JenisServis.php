<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisServis extends Model
{
    protected $table = 'jenis_servis';
    protected $primaryKey = 'id_jenis_servis';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_servis',
        'deskripsi_servis',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'id_jenis_servis', 'id_jenis_servis');
    }
}
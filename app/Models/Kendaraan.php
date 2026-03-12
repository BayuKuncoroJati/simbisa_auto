<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kendaraan extends Model
{
    protected $table = 'kendaraan';
    protected $primaryKey = 'id_kendaraan';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'brand',
        'model',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'id_kendaraan', 'id_kendaraan');
    }
}

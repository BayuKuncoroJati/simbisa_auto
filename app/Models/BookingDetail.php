<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingDetail extends Model
{
    protected $table = 'booking_detail';
    protected $primaryKey = 'id_booking_detail';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_booking',
        'id_user',
        'handled_by',
        'catatan_perbaikan',
        'total_biaya',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function mekanik(): BelongsTo
    {
        return $this->belongsTo(User::class, 'handled_by', 'id_user');
    }

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'id_booking', 'id_booking');
    }
}

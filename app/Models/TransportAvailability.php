<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransportAvailability extends BaseModel
{
    protected $table = 'transport_availability';

    public $timestamps = false;

    protected $fillable = [
        'transport_id',
        'unavailable_from',
        'unavailable_to',
        'reason',
        'booking_id',
    ];

    protected $casts = [
        'unavailable_from' => 'date',
        'unavailable_to' => 'date',
    ];

    public function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class);
    }

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}

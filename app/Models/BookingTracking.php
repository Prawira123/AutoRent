<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingTracking extends BaseModel
{
    public $timestamps = false;

    protected $fillable = [
        'booking_id',
        'recorded_by',
        'event_type',
        'return_status',
        'motor_condition',
        'odometer_km',
        'fuel_level_pct',
        'notes',
        'photo_evidence',
        'latitude',
        'longitude',
        'event_at',
    ];

    protected $casts = [
        'odometer_km' => 'decimal:2',
        'photo_evidence' => 'array',
        'latitude' => 'float',
        'longitude' => 'float',
        'event_at' => 'datetime',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function recorder(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recorded_by');
    }
}

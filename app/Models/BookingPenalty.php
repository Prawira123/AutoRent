<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BookingPenalty extends BaseModel
{
    public $timestamps = false;

    protected $fillable = [
        'booking_id',
        'penalty_type',
        'overdue_hours',
        'rate_per_hour',
        'amount',
        'description',
        'status',
        'calculated_at',
        'paid_at',
    ];

    protected $casts = [
        'rate_per_hour' => 'decimal:2',
        'amount' => 'decimal:2',
        'calculated_at' => 'datetime',
        'paid_at' => 'datetime',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'penalty_id');
    }
}

<?php

namespace App\Models;

use App\Models\BookingPenalty;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends BaseModel
{
    protected $fillable = [
        'booking_code',
        'user_id',
        'transport_id',
        'start_date',
        'end_date',
        'total_days',
        'scheduled_return_at',
        'warning_sent_at',
        'overdue_started_at',
        'actual_return_at',
        'warning_threshold_hours',
        'price_per_day',
        'subtotal',
        'discount_amount',
        'deposit_amount',
        'total_amount',
        'status',
        'return_status',
        'pickup_location',
        'dropoff_location',
        'notes',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'scheduled_return_at' => 'datetime',
        'warning_sent_at' => 'datetime',
        'overdue_started_at' => 'datetime',
        'actual_return_at' => 'datetime',
        'price_per_day' => 'decimal:2',
        'subtotal' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'deposit_amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class);
    }

    public function penalties(): HasMany
    {
        return $this->hasMany(BookingPenalty::class);
    }

    public function trackings(): HasMany
    {
        return $this->hasMany(BookingTracking::class);
    }

    public function warningNotifications(): HasMany
    {
        return $this->hasMany(WarningNotification::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}

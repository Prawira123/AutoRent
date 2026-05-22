<?php

namespace App\Models;

use App\Models\PaymentRefund;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends BaseModel
{
    public $timestamps = false;

    protected $fillable = [
        'booking_id',
        'penalty_id',
        'payment_code',
        'gateway',
        'gateway_tx_id',
        'method',
        'payment_type',
        'amount',
        'currency',
        'status',
        'gateway_response',
        'redirect_url',
        'paid_at',
        'expired_at',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'gateway_response' => 'array',
        'paid_at' => 'datetime',
        'expired_at' => 'datetime',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function penalty(): BelongsTo
    {
        return $this->belongsTo(BookingPenalty::class, 'penalty_id');
    }

    public function refunds(): HasMany
    {
        return $this->hasMany(PaymentRefund::class);
    }
}

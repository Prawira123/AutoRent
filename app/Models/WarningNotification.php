<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WarningNotification extends BaseModel
{
    public $timestamps = false;

    protected $fillable = [
        'booking_id',
        'user_id',
        'notification_type',
        'channel',
        'hours_before_due',
        'is_delivered',
        'scheduled_at',
        'sent_at',
    ];

    protected $casts = [
        'hours_before_due' => 'integer',
        'is_delivered' => 'boolean',
        'scheduled_at' => 'datetime',
        'sent_at' => 'datetime',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

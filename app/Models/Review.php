<?php

namespace App\Models;

use App\Models\ReviewResponse;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends BaseModel
{
    protected $fillable = [
        'booking_id',
        'user_id',
        'transport_id',
        'rating_overall',
        'rating_transport',
        'rating_service',
        'comment',
        'images',
        'is_verified',
        'is_flagged',
        'flag_reason',
        'flagged_by',
    ];

    protected $casts = [
        'images' => 'array',
        'is_verified' => 'boolean',
        'is_flagged' => 'boolean',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class);
    }

    public function flaggedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'flagged_by');
    }

    public function responses(): HasMany
    {
        return $this->hasMany(ReviewResponse::class);
    }
}

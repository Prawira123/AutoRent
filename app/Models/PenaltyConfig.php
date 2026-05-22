<?php

namespace App\Models;

class PenaltyConfig extends BaseModel
{
    public $timestamps = false;

    protected $fillable = [
        'penalty_type',
        'label',
        'grace_period_minutes',
        'rate_per_hour',
        'flat_amount',
        'max_penalty_amount',
        'is_active',
    ];

    protected $casts = [
        'grace_period_minutes' => 'integer',
        'rate_per_hour' => 'decimal:2',
        'flat_amount' => 'decimal:2',
        'max_penalty_amount' => 'decimal:2',
        'is_active' => 'boolean',
    ];
}

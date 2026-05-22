<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransportPriceRule extends BaseModel
{
    protected $table = 'transport_price_rules';

    public $timestamps = false;

    protected $fillable = [
        'transport_id',
        'rule_type',
        'day_type',
        'multiplier',
        'flat_price',
        'valid_from',
        'valid_until',
        'is_active',
    ];

    protected $casts = [
        'multiplier' => 'decimal:2',
        'flat_price' => 'decimal:2',
        'valid_from' => 'date',
        'valid_until' => 'date',
        'is_active' => 'boolean',
    ];

    public function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class);
    }
}

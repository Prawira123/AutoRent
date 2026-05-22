<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends BaseModel
{
    public $timestamps = false;

    protected $fillable = [
        'account_id',
        'reference_id',
        'reference_type',
        'created_by',
        'tx_type',
        'entry_type',
        'amount',
        'balance_before',
        'balance_after',
        'source',
        'description',
        'metadata',
        'transacted_at',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'balance_before' => 'decimal:2',
        'balance_after' => 'decimal:2',
        'metadata' => 'array',
        'transacted_at' => 'datetime',
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends BaseModel
{
    protected $fillable = [
        'account_name',
        'account_type',
        'bank_name',
        'account_number',
        'account_holder',
        'provider',
        'is_active',
        'is_default',
        'balance',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_default' => 'boolean',
        'balance' => 'decimal:2',
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}

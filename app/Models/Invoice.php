<?php

namespace App\Models;

use App\Models\InvoiceItem;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends BaseModel
{
    protected $fillable = [
        'booking_id',
        'user_id',
        'invoice_number',
        'invoice_type',
        'subtotal',
        'discount_amount',
        'penalty_amount',
        'deposit_amount',
        'tax_amount',
        'total_amount',
        'paid_amount',
        'status',
        'issued_at',
        'due_date',
        'paid_at',
        'pdf_url',
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'penalty_amount' => 'decimal:2',
        'deposit_amount' => 'decimal:2',
        'tax_amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'issued_at' => 'date',
        'due_date' => 'date',
        'paid_at' => 'date',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(InvoiceItem::class);
    }
}

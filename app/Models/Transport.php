<?php

namespace App\Models;

use App\Models\TransportAvailability;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transport extends BaseModel
{
    protected $table = 'transport';

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name',
        'brand',
        'model',
        'plate_number',
        'year',
        'color',
        'fuel_type',
        'engine_cc',
        'seat_capacity',
        'transmission',
        'price_per_day',
        'price_per_hour',
        'deposit_amount',
        'status',
        'condition',
        'images',
        'description',
        'features',
    ];

    protected $casts = [
        'price_per_day' => 'decimal:2',
        'price_per_hour' => 'decimal:2',
        'deposit_amount' => 'decimal:2',
        'images' => 'array',
        'features' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(TransportCategory::class, 'category_id');
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(TransportSubcategory::class, 'subcategory_id');
    }

    public function availabilities(): HasMany
    {
        return $this->hasMany(TransportAvailability::class);
    }

    public function priceRules(): HasMany
    {
        return $this->hasMany(TransportPriceRule::class);
    }

    public function maintenances(): HasMany
    {
        return $this->hasMany(TransportMaintenance::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}

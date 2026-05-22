<?php

namespace App\Models;

use App\Models\Transport;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransportSubcategory extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description',
        'level',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(TransportCategory::class, 'parent_id');
    }

    public function transports(): HasMany
    {
        return $this->hasMany(Transport::class, 'subcategory_id');
    }
}

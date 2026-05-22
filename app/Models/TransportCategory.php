<?php

namespace App\Models;

use App\Models\TransportSubcategory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransportCategory extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function subcategories(): HasMany
    {
        return $this->hasMany(TransportSubcategory::class, 'parent_id');
    }

    public function transports(): HasMany
    {
        return $this->hasMany(Transport::class, 'category_id');
    }
}

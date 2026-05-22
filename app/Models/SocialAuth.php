<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialAuth extends BaseModel
{
    protected $table = 'social_auth';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'provider',
        'provider_id',
        'provider_token',
        'provider_refresh_token',
        'expires_at',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

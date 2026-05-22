<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerProfile extends BaseModel
{
    protected $fillable = [
        'user_id',
        'nik',
        'sim_number',
        'sim_type',
        'sim_expired_at',
        'address',
        'city',
        'province',
        'emergency_contact_name',
        'emergency_contact_phone',
        'total_rentals',
        'total_late_returns',
        'risk_level',
    ];

    protected $casts = [
        'sim_expired_at' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

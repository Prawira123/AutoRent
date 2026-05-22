<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransportMaintenance extends BaseModel
{
    protected $table = 'transport_maintenance';

    public $timestamps = false;

    protected $fillable = [
        'transport_id',
        'maintenance_type',
        'description',
        'cost',
        'status',
        'scheduled_at',
        'completed_at',
        'handled_by',
    ];

    protected $casts = [
        'cost' => 'decimal:2',
        'scheduled_at' => 'date',
        'completed_at' => 'date',
    ];

    public function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class);
    }

    public function handledBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'handled_by');
    }
}

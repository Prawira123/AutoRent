<?php

namespace App\Models;

use App\Models\AgentAction;
use App\Models\ChatMessage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ChatSession extends BaseModel
{
    protected $fillable = [
        'user_id',
        'session_token',
        'context_type',
        'context_id',
        'status',
        'metadata',
        'started_at',
        'ended_at',
    ];

    protected $casts = [
        'metadata' => 'array',
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
    ];

    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(ChatMessage::class, 'session_id');
    }

    public function actions(): HasMany
    {
        return $this->hasMany(AgentAction::class, 'session_id');
    }
}

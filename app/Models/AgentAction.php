<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AgentAction extends BaseModel
{
    public $timestamps = false;

    protected $fillable = [
        'session_id',
        'user_id',
        'action_type',
        'input_params',
        'output_result',
        'status',
        'error_message',
        'duration_ms',
        'executed_at',
    ];

    protected $casts = [
        'input_params' => 'array',
        'output_result' => 'array',
        'duration_ms' => 'integer',
        'executed_at' => 'datetime',
    ];

    public function session(): BelongsTo
    {
        return $this->belongsTo(ChatSession::class, 'session_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

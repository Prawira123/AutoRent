<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatMessage extends BaseModel
{
    protected $table = 'chat_messages';

    public $timestamps = false;

    protected $fillable = [
        'session_id',
        'role',
        'content',
        'tool_calls',
        'tool_results',
        'intent',
        'confidence_score',
        'tokens_used',
    ];

    protected $casts = [
        'tool_calls' => 'array',
        'tool_results' => 'array',
        'confidence_score' => 'float',
        'tokens_used' => 'integer',
    ];

    public function session(): BelongsTo
    {
        return $this->belongsTo(ChatSession::class, 'session_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'url',
        'industry',
        'audit_report',
        'ai_readiness_score',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'audit_report' => 'array', // Automatically handle JSON encoding/decoding
    ];
}

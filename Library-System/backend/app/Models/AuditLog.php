<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'action', 'details'];

    // An audit log belongs to a user (nullable for system actions)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

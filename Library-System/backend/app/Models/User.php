<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'provider', 'provider_id', 'avatar'];

    // A user can borrow multiple books (loans)
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    // A user has many audit logs
    public function auditLogs()
    {
        return $this->hasMany(AuditLog::class);
    }
}

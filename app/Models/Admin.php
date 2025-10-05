<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'password',
        'max_transaction',
        'role'
    ];

    public function isAdmin()
    {
        return $this->role === 'Administrator' || $this->role === 'Superadmin';
    }
}

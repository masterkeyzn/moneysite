<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'email',
        'phone',
        'player_token',
        'ip',
        'status',
        'is_new_member',
        'can_login',
        'can_play_game',
        'is_playing',
        'active_balance',
    ];

    /**
     * Atribut yang disembunyikan saat serialisasi (misalnya JSON).
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting tipe data kolom.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_new_member' => 'boolean',
            'can_login' => 'boolean',
            'can_play_game' => 'boolean',
            'is_playing' => 'boolean',
            'active_balance' => 'decimal:2',
        ];
    }

    public function userbank(): HasOne
    {
        return $this->hasOne(Userbank::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function referral(): HasOne
    {
        return $this->hasOne(Referral::class);
    }

    public function userReferral(): HasOne
    {
        return $this->hasOne(UserReferral::class, 'user_id');
    }

    public function userReferrals()
    {
        return $this->hasMany(UserReferral::class, 'referral_id');
    }

    public function bonusdeposits()
    {
        return $this->hasMany(UserBonusDeposit::class);
    }
}

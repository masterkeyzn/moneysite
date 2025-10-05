<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'referral_code',
        'id_card',
        'status',
        'referral_balance',
        'commission_ndp',
        'commission_rdp',
        'approved_at',
        'approved_by',
    ];

    protected $casts = [
        'approved_at' => 'datetime',
        'referral_balance' => 'decimal:2',
        'commission_ndp' => 'decimal:2',
        'commission_rdp' => 'decimal:2',
    ];

    // Relasi ke user yang menjadi referral agent
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke admin yang menyetujui (jika ingin tracking)
    public function approvedBy()
    {
        return $this->belongsTo(Admin::class, 'approved_by');
    }

    public function referredUsers()
    {
        return $this->hasMany(UserReferral::class);
    }
}

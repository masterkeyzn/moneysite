<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBonusDeposit extends Model
{
    protected $fillable = [
        'user_id',
        'bonusdeposit_id',
        'status',
        'claim_count',
        'deposit_amount',
        'bonus_amount',
        'achieved_turnover',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bonusdeposit()
    {
        return $this->belongsTo(Bonusdeposit::class);
    }
}

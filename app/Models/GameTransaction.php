<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameTransaction extends Model
{
    protected $fillable = [
        'status',
        'msg',
        'agent_code',
        'agent_balance',
        'agent_type',
        'user_code',
        'user_balance',
        'deposit_amount',
        'currency',
        'order_no',
    ];
}

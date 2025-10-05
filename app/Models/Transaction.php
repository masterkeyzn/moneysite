<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'transaction_id',
        'amount',
        'recipient_bank_name',
        'recipient_account_number',
        'recipient_account_name',
        'sender_bank_name',
        'sender_account_number',
        'sender_account_name',
        'bonus_id',
        'note',
        'admin',
        'status',
        'sync',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userbank()
    {
        return $this->belongsTo(Userbank::class, 'user_id', 'user_id');
    }
}

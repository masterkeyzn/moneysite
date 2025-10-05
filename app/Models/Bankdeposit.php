<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankdeposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'bank_name',
        'account_name',
        'account_number',
        'min_deposit',
        'max_deposit',
        'unique_code',
        'qris_img',
        'show_form',
        'status_bank',
        'show_bank',
    ];

}

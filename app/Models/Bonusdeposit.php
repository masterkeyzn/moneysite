<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonusdeposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'category',
        'condition_type',
        'amount',
        'max_claims',
        'min_deposit',
        'target_turnover',
        'description',
    ];
}

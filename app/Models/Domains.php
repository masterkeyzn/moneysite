<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domains extends Model
{
    use HasFactory;

    protected $table = 'domains';

    protected $fillable = ['name', 'custom_title', 'meta_tag'];
}

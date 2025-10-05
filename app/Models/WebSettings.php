<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSettings extends Model
{
    use HasFactory;

    protected $table = 'web_settings';

    protected $fillable = [
        'site_name',
        'site_title',
        'marquee',
        'site_logo',
        'popup',
        'sc_livechat',
        'url_livechat',
        'proggressive_img',
        'themes',
        'favicon',
        'min_deposit',
        'max_deposit',
        'min_withdrawal',
        'max_withdrawal',
        'unique_code',
        'is_maintenance',
    ];
}

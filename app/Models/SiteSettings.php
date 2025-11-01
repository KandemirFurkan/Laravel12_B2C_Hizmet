<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    protected $fillable = [
        'site_name',
        'logo',
        'favicon',
        'contact_email',
        'contact_phone',
        'address',
        'map',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedin_url',
    ];
}

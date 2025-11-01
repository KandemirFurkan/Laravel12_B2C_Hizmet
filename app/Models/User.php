<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'registration_date',
        'role',
        'status',
        'location',
        'content',
        'login_ip',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TalepForm extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'sector',
        'location',
        'message',
        'ip_address',
        'user_id',
        'status',
    ];
}

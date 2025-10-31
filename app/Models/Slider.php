<?php

namespace App\Models;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'link',
        'status',
    ];
}

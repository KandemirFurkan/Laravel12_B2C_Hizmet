<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use Sluggable;
 use HasFactory;
    protected $fillable = ['title','content','image','status'];

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'title']
        ];
    }
}

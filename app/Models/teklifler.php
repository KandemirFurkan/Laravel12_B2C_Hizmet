<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teklifler extends Model
{
    protected $fillable = ['talep_id', 'user_id', 'price', 'description', 'status'];

    public function talep()
    {
        return $this->belongsTo(TalepForm::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

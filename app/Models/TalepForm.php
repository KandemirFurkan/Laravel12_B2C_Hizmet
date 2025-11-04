<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function hizmet(): BelongsTo
    {
        return $this->belongsTo(Hizmetler::class, 'sector', 'id');
    }
}

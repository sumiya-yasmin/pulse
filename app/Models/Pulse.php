<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pulse extends Model
{
    protected $fillable = [
        'title',
        'body',
        'mood',
        'energy',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

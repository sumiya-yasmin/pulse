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
        'visibility'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'tarrif_id', 'roomno'
    ];

    public function tarrif(){
    	return $this->hasOne(Tarrif::class);
    }
}

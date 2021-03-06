<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'id','tarrif_id', 'roomno'
    ];

    public function tarrif(){
    	return $this->belongsTo('App\Tarrif');
    }
}

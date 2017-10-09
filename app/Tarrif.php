<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarrif extends Model
{
    protected $fillable = ['name','price'];

    public function room(){
    	return $this->hasMany('App\Room');
    }
}

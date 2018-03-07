<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portcat extends Model
{
    //
    public function portfolio(){
		$this->hasMany('App\Portfolio');
	}
}

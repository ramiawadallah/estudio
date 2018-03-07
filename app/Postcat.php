<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postcat extends Model
{
    //
	public function post(){
		$this->hasMany('App\Post');
	}

}

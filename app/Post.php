<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function Postcat(){
    	$this->belongsTo('App\Postcat');
    }


    public function post_id(){
        return $this->belongsTo('App\Postcat', 'postcats_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    public function Portcat(){
    	$this->belongsTo('App\Portcat');
    }

    public function port_id(){
        return $this->belongsTo('App\Portcat', 'portcats_id', 'id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    //
    /**
     * Checked functions 
     * laboratory() ok
     * 
    */
    public function laboratory(){
        return $this->belongsTo(Laboratory::class);
    }
}

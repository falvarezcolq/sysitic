<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cleaning extends Model
{

   

    /**
     * Checked functions
     * 
     * laboratory() ok
     */

     

    public function laboratory(){
        return $this->belongsTo(laboratory::class);
    }

    



}

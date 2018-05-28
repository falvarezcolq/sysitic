<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandarProblem extends Model
{
    /**
     * 
     * Checked functions
     * problemType() ok
     * solutions() ok
     */


    public function problemType(){
        return $this->belongsTo(Laboratory::class);
    }

    public function Solutions(){
        return $this->hasMany(Solution::class);
    }

}

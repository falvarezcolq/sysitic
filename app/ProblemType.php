<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProblemType extends Model
{
    /**
     * checked functions 
     * problems() ok
     * solutions() ok
     * 
     */

    public function problems(){
        return $this->hasMany(StandarProblem::class);
    }

    public function solutions(){
        return $this->hasMany(Solution::class);
    }
    
}

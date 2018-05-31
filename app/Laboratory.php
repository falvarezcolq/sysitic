<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    
    protected $fillable =[ 'codigo','nombre_lab','ubicacion','people_id'];


    /**
     * checked functions 
     * responsable() ok
     * observations() ok
     * cleanings() ok
     * equipos() ok     // no acepta equipments  
     * 
     */

    protected $table = "laboratories";


    public function responsable(){
        return $this->belongsTo(People::class,'people_id');
    }

    public function observations(){
        return $this->hasMany(Observation::class);
    }
     
    public function cleanings(){
        return $this->hasMany(Cleaning::class);
    }

    public function equipos(){
        return $this->hasMany(Equipment::class);
    }


    

}

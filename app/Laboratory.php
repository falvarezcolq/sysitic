<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\log;
use Illuminate\Support\Facades\Auth;

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


   
    public function delete(){
        $cleanings = $this->cleanings()->get();
        foreach($cleanings as $c){
             $c->delete();
        }

        $observations = $this->observations()->get();
        foreach($observations as $o){
             $o->delete();
        }


        $equipments = $this->equipos()->get();
        foreach($equipments as $e){
             $e->laboratory_id = 1;
             $e->save();
        }
        $log = new log();
        $log->table_name = 'laboratories';
        $log->operation = 'delete';
        $log->old_value = $this->toJson(JSON_PRETTY_PRINT);
        //$log->old_value = $this->toJson();
        $log->user = Auth::user()->id.' '.Auth::user()->people()->first()->nombre.' '.Auth::user()->people()->first()->paterno;
        $log->save();
        return parent::delete();
    }
    

}

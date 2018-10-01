<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;


class Equipment extends Model
{

    // use SoftDeletes;
    protected $dates=['deleted_at'];
    /**
     * checked functions
     * laboratory() ok
     * equipmentProblems() ok
     */

    public function laboratory(){
        return $this->belongsTo(Laboratory::class);
    }

    public function equipmentProblems(){
        return $this->hasMany(EquipmentProblem::class);
    }

    // public function delete(){
    //     $problems = $this->equipmentProblems()->get();
    //     foreach($problems as $p){
    //         $p->delete();
    //     }
    //     return parent::delete();
    // }


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
        $log->user = Auth::user()->id.' '.Auth::user()->people()->first()->nombre.' '.Auth::user()->people()->first()->paterno;
        $log->save();
        return parent::delete();
    }
}


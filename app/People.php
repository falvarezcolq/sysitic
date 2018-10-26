<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\log;
use Auth;
use App\User;

class People extends Model
{
    /**
     * checked functions
     * user() ok
     * laboratories() ok
     */

    protected $table = "people";
    protected $fillable = ['nombre','paterno','materno','ci','email','fecha_nac','genero','telfijo','telcelular','direccion','profesion'];

    public function user(){
        return $this->hasOne(User::class);
    } 

    public function laboratories(){
        return $this->hasMany(Laboratory::class);
    }

    public function delete(){
        $user = $this->user()->get();
        foreach($user as $u){
            $u->delete();
        }
        $log = new log();
        $log->table_name = 'people';
        $log->operation = 'delete';
        $log->old_value = $this->toJson(JSON_PRETTY_PRINT);
        //$log->old_value = $this->toJson();
        $log->user = Auth::user()->id.' '.Auth::user()->people()->first()->nombre.' '.Auth::user()->people()->first()->paterno;
        $log->save();
        return parent::delete();
    }
}

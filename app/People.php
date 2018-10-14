<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}

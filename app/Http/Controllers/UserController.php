<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\People;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $us = User::find($request->user_id);
        if( $us == null){
            if(User::where('user',$request->user)->count()==0){
                $user = new User;
                $user->id = $request->user_id;
                $user->cargo = $request->cargo;
                $user->is_admin= $request->type_user;
                $user->user = $request->user;
                $user->password = bcrypt($request->pass);
                $user->people_id = $request->user_id;
                $user->created_id = Auth::user()->people_id;
                $user->save();
                return response()->json(['msj'=>'ok','text'=>' Credenciales asignadas correctamente']);    
            }else{
                return response()->json(['msj'=>'warning','text'=>' Ya existe una persona con el mismo usuario']);
            }
        }
        return response()->json(['msj'=>'warning','text'=>' La persona ya tiene credenciales para el accesso del sistema']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {   
            $user = User::find($id);
            $people =People::find($id);
            //return view('user.edit',compact('user'));
            return response()->json([
                'user' => $user,
                'people' => $people,
                'self' => (Auth::user()->people_id == $user->id ),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function assignUser($id){
        $people = People::find($id);
        return view('user.create',compact('people'));
    }

    public function sec($id){
        $user = User::find($id);
        return view('user.change',compact('user'));
    }

    public function updateus(Request $request){
        if($request->ajax()){
            $user = User::find($request->user_id);
            $user->cargo = $request->cargo;
            $user->is_admin = $request->type_user;
            $user->updated_id = Auth::user()->people_id;
            $user->save();
            return response()->json(['msj'=>'ok','text'=>'Actualizado correctamente' ]);
        }
        return response()->json(['msj'=>'error','text'=>'error' ]);
        
    }

    public function updatepa(Request $request){
        if($request->ajax()){
            $user = User::find($request->user_id);
            $user->user = $request->user;
            $user->password =  bcrypt( $request->pass);
            $user->updated_id = Auth::user()->people_id;
            $user->save();
            return response()->json(['msj'=>'ok','text'=>'Actualizado correctamente' ]);
        }
        return response()->json(['msj'=>'error','text'=>'error' ]);
    }

    public function active(Request $request){
        if($request->ajax()){
            $user = User::find($request->user_id);
            $user->active =1-$user->active;
            $user->save();
            if($user->active == 1){
                return response()->json(['msj'=>'ok','text'=>'Usuario con credenciales activadas','active'=>$user->active]);
            }else{
                return response()->json(['msj'=>'ok','text'=>'Usuario con credenciales desactivados','active'=>$user->active]);
            }
        }
        return response()->json(['msj'=>'error','text'=>'error' ]);
    }
}

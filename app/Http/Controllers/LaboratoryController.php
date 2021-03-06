<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LaboratoryRequest;

use App\Http\Controllers\Controller;
use App\Laboratory;
use Auth;

class LaboratoryController extends Controller
{

    public function listing(){
        $laboratories = Laboratory::with('responsable')->get();
        return response()->json(
            $laboratories->toArray()
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laboratory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('laboratory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaboratoryRequest $request)
    {
        
        if($request->ajax()){
            $laboratory =new  Laboratory;
            $laboratory->codigo = $request->codigo;
            $laboratory->nombre_lab = $request->nombre_lab;
            $laboratory->ubicacion = $request->ubicacion;
            $laboratory->people_id = $request->people_id;
            $laboratory->created_id = Auth::user()->people_id;
            $laboratory->save();
            return response()->json([
                "mensaje" => 'creado',
            ]);
        }
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
    public function edit($id)
    {
        $laboratory = Laboratory::find($id);
        return response()->json([
            'laboratory' => $laboratory,
            'responsable' => $laboratory->responsable,
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
        if($request->ajax()) {
            $laboratory = Laboratory::find($id);
            $laboratory->codigo = $request->codigo;
            $laboratory->nombre_lab = $request->nombre_lab;
            $laboratory->ubicacion = $request->ubicacion;
            $laboratory->people_id = $request->people_id;
            $laboratory->updated_id = Auth::user()->people_id;
            $laboratory->save();
            return response()->json([
                "mensaje" => 'actualizado',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if( $request->ajax()) {
            $laboratory = Laboratory::find($id);
            $laboratory->delete();
            return response()->json([
                "mensaje" => 'Laboratorio eliminado correctamente',
            ]);
        } 
        return  response()->json(['msj'=>'error']);
    }
}

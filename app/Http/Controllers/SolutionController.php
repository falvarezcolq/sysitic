<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Solution;

class SolutionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solution = new Solution;
        $solution->descripcion = $request->descripcion;
        $solution->problem_type_id = $request->problem_type_id;
        $solution->standar_problem_id = $request->standar_problem_id;
        $solution->save();
        
        $problemType = \App\ProblemType::find($solution->problem_type_id);
        return response()->json([
            'solution' => $solution,
            'problemType' => $problemType
        ]);
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
        $solution = Solution::find($id);
        return response()->json([
            'solution' => $solution
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
        $solution = Solution::find($id);
        $solution->descripcion = $request->descripcion;
        $solution->problem_type_id = $request->type_id;
        $solution->save();
        return response()->json(['msj' =>'ok','text'=>'Actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solution = Solution::find($id);
    
        if($solution->equipmentProblems()->count() == 0 ){
                $solution->delete();
                return response()->json(['msj' =>'ok','text'=>'Fue eliminado con éxito']);
        }
        return response()->json(['msj' =>'warning','text'=>'No se puede eliminar, porque la soluci&oacute;n fue aplicada a problemas de equipos']);
    }
}

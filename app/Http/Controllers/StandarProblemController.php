<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\StandarProblem;  

class StandarProblemController extends Controller
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
        $problem = new StandarProblem;
        $problem->descripcion = $request->descripcion;
        $problem->problem_type_id=$request->problem_type_id;
        $problem->save();

        return response()->json([
            'problem'=>$problem
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
        //
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


    public function listing($search){
        $standarProblems  =null;
        if($search =='ALL'){
            $standarProblems = StandarProblem::with('problemType')->get();
        }else{
            $standarProblems = StandarProblem::with('problemType')->where('descripcion','like','%'.$search.'%')->get();
        }
        
        return response()->json(
            $standarProblems->toArray()
        );
    }

    public function listall(){
        $standarProblems = StandarProblem::orderBy('descripcion')->get();
        return response()->json(
            $standarProblems->toArray()
        );
    }

    public function solutions($id){
        $solutions = StandarProblem::find($id)->solutions()->with('problemType')->get();
        return response()->json(
           $solutions->toArray()
        );
    }

    public function newSolution($id){

        $standarProblem = StandarProblem::find($id);
        $problemTypes = \App\ProblemType::all();
        return response()->json(
            view('equipmentProblem.equipmentAddSolution',compact('standarProblem','problemTypes'))->render()
        );
    }
}

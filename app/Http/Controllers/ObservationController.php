<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Observation;
use Auth;

class ObservationController extends Controller
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
        $date = \Carbon\Carbon::now();

        $observation = new Observation;
        $observation->descripcion = $request->descripcion;
        $observation->laboratory_id=$request->laboratory_id;
        $observation->created_id = Auth::user()->people_id;
        $observation->save();

        return response()->json([
            "mensaje"=>"A.OK",
            "time" => $date->format("Y-m-d H:i:s")
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
        $observations = null;
        if($id != 0){
            $observations = Observation::where('laboratory_id',$id)
                                    ->with('laboratory')
                                    ->orderBy('created_at','DESC')
                                    ->get();
        }else{
            $observations = Observation::with('laboratory')->orderBy('created_at','DESC')->get();
        }
        return response()->json(
            $observations->toArray()
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $observation = Observation::find($id);
        return response()->json([
            'observation' => $observation
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
        $observation = Observation::find($id);
        $observation->descripcion = $request->descripcion;
        $observation->updated_id = Auth::user()->people_id;
        $observation->save();
        return response()->json([
            'mensaje' => 'success',
            'time'  => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $observation = Observation::find($id);
        $observation->delete();
        return response()->json(['msj' =>'ok','text'=>'Fue eliminado con éxito']);
    }

    public function listall(Request $request,$id){
        if($request->ajax()){

            if(Auth::user()->is_admin){
                $observations = ($id != 0 )? Observation::where('laboratory_id',$id)
                ->with('laboratory')
                ->orderBy('id','DESC')
                ->paginate(10): Observation::with('laboratory')->orderBy('id','DESC')->paginate(10);
            }else{
                $observations = ($id != 0 )? Observation::where('laboratory_id',$id)
                ->where('created_id',Auth::user()->people_id)
                ->with('laboratory')
                ->orderBy('id','DESC')
                ->paginate(10): Observation::where('created_id',Auth::user()->people_id)->with('laboratory')->orderBy('id','DESC')->paginate(10);
            }

            return response()->json(view('observation.table',compact('observations'))->render());
       }

       return response()->json([
           'mensaje' => 'error'
       ]);
    }

}

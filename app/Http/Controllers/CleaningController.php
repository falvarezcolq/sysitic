<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cleaning;
use App\Laboratory;
use Auth;

class CleaningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cleaning.index');
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

        $cleaning = new Cleaning;
        $cleaning->estado = $request->estado;
        $cleaning->laboratory_id=$request->laboratory_id;
        $cleaning->created_id = Auth::user()->people_id;
        $cleaning->save();

        return response()->json([
            "mensaje"=>"Exitoso",
            "time" =>  $date->format('Y-m-d H:i:s')
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
        $cleanings = null;
        if($id != 0){
            $cleanings = Cleaning::where('laboratory_id',$id)
                                    ->with('laboratory')
                                    ->orderBy('created_at','DESC')
                                    ->get();
        }else{
            $cleanings = Cleaning::with('laboratory')->orderBy('created_at','DESC')->get();;
        }
        return response()->json(
            $cleanings->toArray()
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
        $cleaning = Cleaning::find($id);
        return response()->json([
            'cleaning' => $cleaning
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
        $cleaning = Cleaning::find($id);
        $cleaning->estado = $request->estado;
        $cleaning->laboratory_id=$request->laboratory_id;
        $cleaning->updated_id = Auth::user()->people_id;
        $cleaning->save();

        return response()->json([
            "msj"=>"ok",
            "text" =>  "Reporte de limpieza actualizado correctamente"
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
        $cleaning = Cleaning::find($id);  
        $cleaning->delete();
        return response()->json(['msj' =>'ok','text'=>'Fue eliminado con éxito']);
    }


    public function listall(Request $request, $id){
        $cleanings = null;
        if($id != 0){
            $cleanings = Cleaning::where('laboratory_id',$id)
                                    ->with('laboratory')
                                    ->orderBy('created_at','DESC')
                                    ->paginate(10);
        }else{
            $cleanings = Cleaning::with('laboratory')->orderBy('created_at','DESC')->paginate(10);
        }

        if($request->ajax()){
            return response()->json(view('cleaning.table',compact('cleanings'))->render());
        }
        
        return response()->json([
            'mensaje' => 'error'
        ]);
    }
}

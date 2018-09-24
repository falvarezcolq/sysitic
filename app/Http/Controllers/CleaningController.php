<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cleaning;
use App\Laboratory;

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
}

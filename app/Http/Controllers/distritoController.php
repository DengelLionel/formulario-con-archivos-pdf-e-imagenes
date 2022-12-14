<?php

namespace App\Http\Controllers;

use App\Models\distritos;
use Illuminate\Http\Request;

class distritoController extends Controller
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

    public function ciudad(Request $request)
    {
    if(isset($request->texto)){
        $ciudad=distritos::where('provincia_id','=',$request->texto)->get();
        return response()->json(
            [
                'lista'=>$ciudad,
                'success'=>true
            ]
            );
    }else{
        return response()->json(
            [
                'success'=>false
            ]
            ); 
    }
    }
    public function provincia()
    {
        //
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\distritos  $distritos
     * @return \Illuminate\Http\Response
     */
    public function show(distritos $distritos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\distritos  $distritos
     * @return \Illuminate\Http\Response
     */
    public function edit(distritos $distritos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\distritos  $distritos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, distritos $distritos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\distritos  $distritos
     * @return \Illuminate\Http\Response
     */
    public function destroy(distritos $distritos)
    {
        //
    }
}

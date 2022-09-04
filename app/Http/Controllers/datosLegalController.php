<?php

namespace App\Http\Controllers;

use App\Exports\datosLegalExport;
use App\Http\Requests\datosLegalRequest;
use App\Models\datosLegal;
use App\Models\provincias;
use App\Models\distritos;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class datosLegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $fecha;
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function representantelegals()
    {
        $provincias=provincias::all();
       return view('create.legal',compact('provincias'));
    }

   
    
    public function store(datosLegalRequest $request)
    {
        $datosLegal=$request->all();
        if(($imagenAnverso=$request->file('imagen_anverso')) && ($imagenReverso=$request->file('imagen_reverso')) && ($pdf=$request->file('pdf')) && ($imagenSelfie=$request->file('imagen_selfie')) && ($constitucion=$request->file('constitucion_compañia')) && ($nombramiento=$request->file('nombramiento')) ){
        
            $rutaGuardarImagenAnverso='representanteLegal/anverso/';
            $imagenAnversoFinal=date('YmdHis').".".$imagenAnverso->getClientOriginalExtension();
            $imagenAnverso->move($rutaGuardarImagenAnverso,$imagenAnversoFinal);
            $datosLegal['imagen_anverso']="$imagenAnversoFinal";
    
            $rutaGuardarImagenReverso='representanteLegal/reverso/';
            $imagenReversoFinal=date('YmdHis').".".$imagenReverso->getClientOriginalExtension();
            $imagenReverso->move($rutaGuardarImagenReverso,$imagenReversoFinal);
            $datosLegal['imagen_reverso']="$imagenReversoFinal";
    
            $rutaGuardarPdf='representanteLegal/pdf/';
            $pdfFinal=date('YmHis').".".$pdf->getClientOriginalExtension();
            $pdf->move($rutaGuardarPdf,$pdfFinal);
            $datosLegal['pdf']=$pdfFinal;
    
            $rutaImagenSelfie='representanteLegal/selfie/';
            $imagenSelfieFinal=date('YmHis').'.'.$imagenSelfie->getClientOriginalExtension();
            $imagenSelfie->move($rutaImagenSelfie,$imagenSelfieFinal);
            $datosLegal['imagen_selfie']=$imagenSelfieFinal;

            $rutaConstitucion='representanteLegal/constitucionCompañia/';
            $constitucionFinal=date('YmHis').'.'.$constitucion->getClientOriginalExtension();
            $constitucion->move($rutaConstitucion,$constitucionFinal);
            $datosLegal['constitucion_compañia']=$constitucionFinal;
            
            $rutaNombramiento='representanteLegal/nombramiento/';
            $nombramientoFinal=date('YmHis').'.'.$nombramiento->getClientOriginalExtension();
            $nombramiento->move($rutaNombramiento,$nombramientoFinal);
            $datosLegal['nombramiento']=$nombramientoFinal;
            
            $datospersonales=$request->only(['nombres','apellidos','provincia']);  
            $provinciaid=provincias::find($datospersonales['provincia']);
            $datosLegal['provincia']=$provinciaid->nombre;    
            $datosLegal['nombres']=ucwords($datospersonales['nombres']);
            $datosLegal['apellidos']=ucwords($datospersonales['apellidos']);
            
        }
        datosLegal::create($datosLegal);
        return redirect()->route('/')->with('status','Formulario guardado con exito');
    }

    public function export(Request $request){
        $this->fecha=$request->dia;
        return Excel::download((new datosLegalExport($this->fecha)),$this->fecha.'-representanteLegal.xlsx');
    }
  
    public function show(datosLegal $datosLegal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datosLegal  $datosLegal
     * @return \Illuminate\Http\Response
     */
    public function edit(datosLegal $datosLegal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datosLegal  $datosLegal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datosLegal $datosLegal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datosLegal  $datosLegal
     * @return \Illuminate\Http\Response
     */
    public function destroy(datosLegal $datosLegal)
    {
        //
    }
}

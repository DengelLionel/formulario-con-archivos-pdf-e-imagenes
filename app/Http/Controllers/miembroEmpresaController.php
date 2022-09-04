<?php

namespace App\Http\Controllers;

use App\Exports\miembroEmpresaExport;
use App\Http\Requests\miembroEmpresaRequest;
use App\Models\miembroEmpresa;
use App\Models\provincias;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class miembroEmpresaController extends Controller
{
    protected $fecha;
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function miembrodelaempresa()
    {
        $provincias=provincias::all();
      return view('create.miembro',compact('provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(miembroEmpresaRequest $request)
    {
        $datosMiembroEmpresa=$request->all();
        if(($imagenAnverso=$request->file('imagen_anverso')) && ($imagenReverso=$request->file('imagen_reverso')) && ($pdf=$request->file('pdf')) && ($imagenSelfie=$request->file('imagen_selfie')) && ($constitucion=$request->file('constitucion_compañia')) && ($nombramiento=$request->file('nombramiento')) && ($autorizacion=$request->file('autorizacion_representante')) ){
        
            $rutaGuardarImagenAnverso='miembroEmpresa/anverso/';
            $imagenAnversoFinal=date('YmdHis').".".$imagenAnverso->getClientOriginalExtension();
            $imagenAnverso->move($rutaGuardarImagenAnverso,$imagenAnversoFinal);
            $datosMiembroEmpresa['imagen_anverso']="$imagenAnversoFinal";
    
            $rutaGuardarImagenReverso='miembroEmpresa/reverso/';
            $imagenReversoFinal=date('YmdHis').".".$imagenReverso->getClientOriginalExtension();
            $imagenReverso->move($rutaGuardarImagenReverso,$imagenReversoFinal);
            $datosMiembroEmpresa['imagen_reverso']="$imagenReversoFinal";
    
            $rutaGuardarPdf='miembroEmpresa/pdfruc/';
            $pdfFinal=date('YmHis').".".$pdf->getClientOriginalExtension();
            $pdf->move($rutaGuardarPdf,$pdfFinal);
            $datosMiembroEmpresa['pdf']=$pdfFinal;
    
            $rutaImagenSelfie='miembroEmpresa/selfie/';
            $imagenSelfieFinal=date('YmHis').'.'.$imagenSelfie->getClientOriginalExtension();
            $imagenSelfie->move($rutaImagenSelfie,$imagenSelfieFinal);
            $datosMiembroEmpresa['imagen_selfie']=$imagenSelfieFinal;

            $rutaConstitucion='miembroEmpresa/constitucionCompañia/';
            $constitucionFinal=date('YmHis').'.'.$constitucion->getClientOriginalExtension();
            $constitucion->move($rutaConstitucion,$constitucionFinal);
            $datosMiembroEmpresa['constitucion_compañia']=$constitucionFinal;
            
            $rutaNombramiento='miembroEmpresa/nombramiento/';
            $nombramientoFinal=date('YmHis').'.'.$nombramiento->getClientOriginalExtension();
            $nombramiento->move($rutaNombramiento,$nombramientoFinal);
            $datosMiembroEmpresa['nombramiento']=$nombramientoFinal;

            $rutaAutorizacion='miembroEmpresa/autorizacion/';
            $autorizacionFinal=date('YmHis').'.'.$autorizacion->getClientOriginalExtension();
            $autorizacion->move($rutaAutorizacion,$autorizacionFinal);
            $datosMiembroEmpresa['autorizacion_representante']=$autorizacionFinal;
            
            $datospersonales=$request->only(['nombres_miembro','apellidos_miembro',"apellidos_representante_legal","nombres_representante_legal",'provincia']);
            $provinciaid=provincias::find($datospersonales['provincia']);
            $datosMiembroEmpresa['provincia']=$provinciaid->nombre;    
            $datosMiembroEmpresa['nombres_miembro']=ucwords($datospersonales['nombres_miembro']);
            $datosMiembroEmpresa['apellidos_miembro']=ucwords($datospersonales['apellidos_miembro']);
            $datosMiembroEmpresa['nombres_representante_legal']=ucwords($datospersonales['nombres_representante_legal']);
            $datosMiembroEmpresa['apellidos_representante_legal']=ucwords($datospersonales['apellidos_representante_legal']);
        }
        miembroEmpresa::create($datosMiembroEmpresa);
        return redirect()->route('/')->with('status','Formulario guardado con exito');
    }

    public function export(Request $request){
        $this->fecha=$request->dia;
        return Excel::download((new miembroEmpresaExport($this->fecha)),$this->fecha.'miembroEmpresa.xlsx');
    }
    public function show(miembroEmpresa $miembroEmpresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\miembroEmpresa  $miembroEmpresa
     * @return \Illuminate\Http\Response
     */
    public function edit(miembroEmpresa $miembroEmpresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\miembroEmpresa  $miembroEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, miembroEmpresa $miembroEmpresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\miembroEmpresa  $miembroEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(miembroEmpresa $miembroEmpresa)
    {
        //
    }
}

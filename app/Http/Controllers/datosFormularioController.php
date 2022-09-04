<?php

namespace App\Http\Controllers;

use App\Models\datosFormulario;
use App\Exports\datosFormularioExport;
use App\Http\Requests\datosFormularioRequest;
use App\Models\datosLegal;
use App\Models\distritos;
use App\Models\miembroEmpresa;
use App\Models\provincias;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class datosFormularioController extends Controller
{
    
    protected $fecha;
    public function index()
    {
        $datos=datosFormulario::all();
        $legales=datosLegal::all();
        $miembros=miembroEmpresa::all();
        return view('index',compact('datos','legales','miembros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.firmas');
    }
    public Function createpersonan(){
        $provincias=provincias::all();
        return view('create.create',compact('provincias'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(datosFormularioRequest $request)
    {
      
       
        $datosFormulario=$request->all();
        
    if(($imagenAnverso=$request->file('imagen_anverso')) && ($imagenReverso=$request->file('imagen_reverso')) && ($pdf=$request->file('pdf')) && ($imagenSelfie=$request->file('imagen_selfie'))){
        
        $rutaGuardarImagenAnverso='personanatura/anverso/';
        $imagenAnversoFinal=date('YmdHis').".".$imagenAnverso->getClientOriginalExtension();
        $imagenAnverso->move($rutaGuardarImagenAnverso,$imagenAnversoFinal);
        $datosFormulario['imagen_anverso']="$imagenAnversoFinal";

        $rutaGuardarImagenReverso='personanatura/reverso/';
        $imagenReversoFinal=date('YmdHis').".".$imagenReverso->getClientOriginalExtension();
        $imagenReverso->move($rutaGuardarImagenReverso,$imagenReversoFinal);
        $datosFormulario['imagen_reverso']="$imagenReversoFinal";

        $rutaGuardarPdf='personanatura/pdf/';
        $pdfFinal=date('YmHis').".".$pdf->getClientOriginalExtension();
        $pdf->move($rutaGuardarPdf,$pdfFinal);
        $datosFormulario['pdf']=$pdfFinal;

        $rutaImagenSelfie='personanatura/selfie/';
        $imagenSelfieFinal=date('YmHis').'.'.$imagenSelfie->getClientOriginalExtension();
        $imagenSelfie->move($rutaImagenSelfie,$imagenSelfieFinal);
        $datosFormulario['imagen_selfie']=$imagenSelfieFinal;
        
        $datospersonales=$request->only(['nombres','apellidos']);  
        $datosFormulario['nombres']=ucwords($datospersonales['nombres']);
        $datosFormulario['apellidos']=ucwords($datospersonales['apellidos']);
    }
    else if(($imagenAnverso=$request->file('imagen_anverso')) && ($imagenReverso=$request->file('imagen_reverso'))  && ($imagenSelfie=$request->file('imagen_selfie'))){
        
        $rutaGuardarImagenAnverso='personanatura/anverso/';
        $imagenAnversoFinal=date('YmdHis').".".$imagenAnverso->getClientOriginalExtension();
        $imagenAnverso->move($rutaGuardarImagenAnverso,$imagenAnversoFinal);
        $datosFormulario['imagen_anverso']="$imagenAnversoFinal";

        $rutaGuardarImagenReverso='personanatura/reverso/';
        $imagenReversoFinal=date('YmdHis').".".$imagenReverso->getClientOriginalExtension();
        $imagenReverso->move($rutaGuardarImagenReverso,$imagenReversoFinal);
        $datosFormulario['imagen_reverso']="$imagenReversoFinal";


        $rutaImagenSelfie='personanatura/selfie/';
        $imagenSelfieFinal=date('YmHis').'.'.$imagenSelfie->getClientOriginalExtension();
        $imagenSelfie->move($rutaImagenSelfie,$imagenSelfieFinal);
        $datosFormulario['imagen_selfie']=$imagenSelfieFinal;
        
        $datospersonales=$request->only(['nombres','apellidos','provincia']);
        $provinciaid=provincias::find($datospersonales['provincia']);
      
        $datosFormulario['provincia']=$provinciaid->nombre;  
        $datosFormulario['nombres']=ucwords($datospersonales['nombres']);
        $datosFormulario['apellidos']=ucwords($datospersonales['apellidos']);
    }
    datosFormulario::create($datosFormulario);
    return redirect()->route('/')->with('status','Formulario guardado con exito');
    }
   
    public function provincia()
    {
     
    }
   public function export(Request $request) 
    {
        $this->fecha=$request->dia;
        return Excel::download((new datosFormularioExport($this->fecha)),$this->fecha.'-persona_natural.xlsx');
    } 
    
    
    public function show(datosFormulario $datosFormulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datosFormulario  $datosFormulario
     * @return \Illuminate\Http\Response
     */
    public function edit(datosFormulario $datosFormulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datosFormulario  $datosFormulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datosFormulario $datosFormulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datosFormulario  $datosFormulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(datosFormulario $datosFormulario)
    {
        //
    }
}

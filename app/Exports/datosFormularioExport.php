<?php

namespace App\Exports;

use App\Models\datosFormulario;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class datosFormularioExport implements FromView,ShouldAutoSize
{
   
   
    public function __construct($dia)
    {
        $this->dia = $dia;
    }
 
    public function view(): View
    {
        return view('datosformulario.export',[
            'datosformulario'=>datosFormulario::query()->where("dia_creado","=",$this->dia)->orderBy('id','desc')->get()
        ]);
    }
}

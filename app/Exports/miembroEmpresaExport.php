<?php

namespace App\Exports;

use App\Models\miembroEmpresa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class miembroEmpresaExport implements FromView,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($dia)
    {
        $this->dia=$dia;
    }
    public function view(): View
    {
      return view('exportmiembroempresa.export',[
        'miembro'=>miembroEmpresa::query()->where('dia_creado','=',$this->dia)->get()
      ]);  
    }
}

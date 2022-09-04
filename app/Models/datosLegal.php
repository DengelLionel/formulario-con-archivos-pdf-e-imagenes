<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datosLegal extends Model
{
    use HasFactory;
   protected $fillable=["dia_creado","numero_documento","numero_ruc","razon_social","cargo_representante","constitucion_compañia","nombramiento","tipo_certificado","documento_identidad","imagen_anverso","imagen_reverso","pdf","imagen_selfie","nombres","apellidos","sexo","fecha_nacimiento","nacionalidad","telefono_celular","telefono_celular2","correo","correo2","provincia","ciudad","direccion","vigencia"];
}

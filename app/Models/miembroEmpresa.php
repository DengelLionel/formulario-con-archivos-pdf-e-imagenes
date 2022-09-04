<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miembroEmpresa extends Model
{
    use HasFactory;
    protected $fillable=["dia_creado","numero_documento_miembro_empresa","documento_identidad_miembro_empresa","numero_ruc","razon_social","cargo_representante","cargo_del_miembro","departamento_que_labora","numero_documento_representante_legal","documento_identidad_representante_legal","nombres_miembro","apellidos_miembro","motivo_uso_firma","apellidos_representante_legal","nombres_representante_legal","constitucion_compañia","nombramiento","autorizacion_representante","tipo_certificado","imagen_anverso","imagen_reverso","pdf","imagen_selfie","sexo","fecha_nacimiento","nacionalidad","telefono_celular","telefono_celular2","correo","correo2","provincia","ciudad","direccion","vigencia"];

}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class miembroEmpresaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "dia_creado"=>"required",
            "documento_identidad_miembro_empresa"=>"required",
            "documento_identidad_representante_legal"=>"required",
            "numero_ruc"=>"required|max:13",
            "razon_social"=>"required",
            "cargo_representante"=>"required",
            "cargo_del_miembro"=>"required",
            "departamento_que_labora"=>"required",
            "constitucion_compañia"=>"required|file|mimes:pdf|max:10240",
            "nombramiento"=>"required|file|mimes:pdf|max:10240",
            "autorizacion_representante"=>"required|file|mimes:pdf|max:10240",
            "tipo_certificado"=>"required",
            "numero_documento_miembro_empresa"=>"required",
            "numero_documento_representante_legal"=>"required",
            "imagen_anverso"=>"required|image|mimes:jpeg,jpg,png|max:10240",
            "imagen_reverso"=>"required|image|mimes:jpeg,jpg,png|max:10240",
            "pdf"=>"required|file|mimes:pdf|max:10240",
            "imagen_selfie"=>"required|image|mimes:jpeg,jpg,png|max:10240",
            "nombres_miembro"=>"required",
            "apellidos_miembro"=>"required",
            "motivo_uso_firma"=>"required",
            "apellidos_representante_legal"=>"required",
            "nombres_representante_legal"=>"required",
            "sexo"=>"required",
            "fecha_nacimiento"=>"required",
            "nacionalidad"=>"required",
            "telefono_celular"=>"required",
            "telefono_celular2"=>"max:10",
            "correo"=>"required|email",
            "correo2"=>"email",
            "provincia"=>"required",
            "ciudad"=>"required",
            "direccion"=>"required",
            "vigencia"=>"required",
        ];
    }
}


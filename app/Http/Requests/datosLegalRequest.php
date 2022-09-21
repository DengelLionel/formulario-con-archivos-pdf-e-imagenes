<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class datosLegalRequest extends FormRequest
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
            "numero_documento"=>"required",
            "numero_ruc"=>"required|max:13",
            "razon_social"=>"required",
            "cargo_representante"=>"required",
            "constitucion_compañia"=>"required|file|mimes:pdf|max:40240",
            "nombramiento"=>"required|file|mimes:pdf|max:40240",
            "tipo_certificado"=>"required",
            "documento_identidad"=>"required",
            "imagen_anverso"=>"required|image|mimes:jpeg,jpg,png|max:40240",
            "imagen_reverso"=>"required|image|mimes:jpeg,jpg,png|max:40240",
            "pdf"=>"file|mimes:pdf|max:40240",
            "imagen_selfie"=>"required|image|mimes:jpeg,jpg,png|max:40240",
            "nombres"=>"required",
            "apellidos"=>"required",
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

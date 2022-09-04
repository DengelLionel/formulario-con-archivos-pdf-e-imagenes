<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class datosFormularioRequest extends FormRequest
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
            "numero_documento_identidad"=>"required",
            "tipo_certificado"=>"required",
            "documento_identidad"=>"required",
            "imagen_anverso"=>"required|image|mimes:jpeg,jpg,png|max:10240",
            "imagen_reverso"=>"required|image|mimes:jpeg,jpg,png|max:10240",
            "pdf"=>"file|mimes:pdf|max:10240",
            "imagen_selfie"=>"required|image|mimes:jpeg,jpg,png|max:10240",
            "nombres"=>"required",
            "apellidos"=>"required",
            "con_ruc"=>"required",
            "sexo"=>"required",
            "fecha_nacimiento"=>"required",
            "nacionalidad"=>"required",
            "telefono_celular"=>"required",
            "telefono_celular2"=>"max:10",
            "correo"=>"required|email",
            "correo2"=>"",
            "provincia"=>"required",
            "ciudad"=>"required",
            "direccion"=>"required",
            "vigencia"=>"required",
        ];
    }
}

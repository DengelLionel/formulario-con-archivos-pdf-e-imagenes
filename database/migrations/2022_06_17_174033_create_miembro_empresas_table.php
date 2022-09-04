<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembroEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembro_empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("dia_creado");
            $table->string("numero_documento_miembro_empresa");
            $table->string("documento_identidad_miembro_empresa");
            $table->string("numero_ruc");
            $table->string("razon_social");
            $table->string("cargo_representante");
            $table->string("cargo_del_miembro");
            $table->string("departamento_que_labora");
            $table->string("numero_documento_representante_legal");
            $table->string("documento_identidad_representante_legal");
            $table->string("nombres_miembro");
            $table->string("apellidos_miembro");
            $table->string("motivo_uso_firma");
            $table->string("apellidos_representante_legal");
            $table->string("nombres_representante_legal");
            $table->string("constitucion_compañia");
            $table->string("nombramiento");
            $table->string("autorizacion_representante");
            
            $table->string("tipo_certificado");
            
            $table->string("imagen_anverso");
            $table->string("imagen_reverso");
            $table->string("pdf");
            $table->string("imagen_selfie");
            $table->string("sexo");
            $table->date("fecha_nacimiento");
            $table->string("nacionalidad")->default('Ecuatoriana');
            $table->string("telefono_celular");
            $table->string("telefono_celular2")->nullable();
            $table->string("correo");
            $table->string("correo2" )->nullable();
            $table->string("provincia");
            $table->string("ciudad");
            $table->string("direccion");
            $table->string("vigencia");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miembro_empresas');
    }
}

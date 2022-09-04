<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_formularios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("dia_creado");
            $table->string("numero_documento_identidad");
            $table->string("tipo_certificado");
            $table->string("documento_identidad");
            $table->string("imagen_anverso");
            $table->string("imagen_reverso");
            $table->string("pdf")->nullable();
            $table->string("imagen_selfie");
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("con_ruc");
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
        Schema::dropIfExists('datos_formularios');
    }
}

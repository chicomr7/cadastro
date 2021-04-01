<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("CEPusuario");
            $table->string("logradoudoUsuario");
            $table->integer("NcasaUsuario");
            $table->string("complementoUsuario");
            $table->string("bairroUsuario");
            $table->string("cidadeUsuario");
            $table->string("estadoUsuario");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}

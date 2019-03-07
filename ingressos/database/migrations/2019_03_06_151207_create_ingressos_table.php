<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingressos', function (Blueprint $table) {

            // Declaração das colunas da tabela

            $table->increments('id');
            $table->unsignedInteger('id_evento')->nullable($value = false);
            $table->unsignedSmallInteger('numero_ingresso')->nullable($value = false);
            $table->boolean('vendido')->nullable($value = false)->default($value = false);
            $table->unsignedMediumInteger('versao')->nullable($value = false);

            // constraints

            $table->foreign('id_evento')->references('id')->on('eventos');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingressos');
    }


}

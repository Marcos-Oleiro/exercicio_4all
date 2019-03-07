<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {

            // Declaração das colunas da tabela

            $table->integer('id')->unique(); // não foi considerado um auto increment para usar os mesmos dados informados no json
            $table->string('nome',100)->nullable($value = false);
            $table->string('cidade',100)->nullable($value = false);
            $table->string('uf',2)->nullable($value = false);
            $table->string('endereco',100)->nullable($value = false);
            $table->unsignedInteger('numero')->nullable($value = false);
            $table->string('complemento',100)->nullable();
            $table->string('bairro',100)->nullable($value = false);
            $table->string('cep',9)->nullable();
            $table->double('lat',10,7)->nullable();
            $table->double('lng',10,7)->nullable();

            // contraints
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locals');
    }
}

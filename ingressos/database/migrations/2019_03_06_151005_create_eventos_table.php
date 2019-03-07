<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {

            // Declaração das colunas da tabela

            $table->unsignedInteger('id')->nullable($value = false)->unique(); // não foi considerado um auto increment para usar os mesmos dados informados no json
            $table->unsignedInteger('evento_id')->nullable($value = false);
            $table->string('evento_nome',100)->nullable($value = false);
            $table->string('seats_key',100);
            $table->string('seats_public_key',100);
            $table->unsignedInteger('categoria_id')->nullable($value = false);
            $table->unsignedTinyInteger('limite_ingressos_por_pedido')->nullable($value = false);
            $table->dateTime('data')->nulllable($value = false);
            $table->dateTime('data_final')->nullable();
            $table->string('url_landing_page',100)->nullable();;
            $table->dateTime('dt_primeira_apresentacao')->nullable($value = false);
            $table->dateTime('dt_ultima_apresentacao')->nullable($value = false);
            $table->text('imagem_wide')->nullable();;
            $table->text('imagem_box')->nullable();;
            $table->text('imagem_mobile')->nullable();;
            $table->text('imagem_totem')->nullable();;
            $table->boolean('b_repeticao')->nullable($value = false);
            $table->unsignedInteger('destaque')->nullable($value = false);
            $table->unsignedInteger('nivel_destaque')->nullable($value = false);
            $table->boolean('b_assento_numerado')->nullable($value = false);
            $table->text('imagem_mapa')->nullable();;
            $table->dateTime('dt_fim_vendas_internet')->nullable($value = false);
            $table->string('pontos_venda',100)->nullable();;
            $table->unsignedDecimal('ingresso_inicial',5,2); //considerado o valor inicial(e único) do ingresso
            $table->unsignedInteger('repeticao_id')->nullable();;
            $table->string('url_portal',200)->nullable();;
            $table->text('descricao')->nullable();;
            $table->text('extras')->nullable();;
            $table->boolean('possui_produtos')->nullable($value = false);
            $table->boolean('encerrada')->nullable($value = false);
            $table->boolean('esgotado')->nullable($value = false);
            $table->Integer('local_id')->nullable();;
            $table->unsignedInteger('ingresso_quantidade'); // valor criado arbritariamente(pois não constava no json)

            // constraints

            $table->primary('id');
            $table->foreign('local_id')->references('id')->on('locals');








        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}

// https://youtu.be/jvRhkZLM__E?t=3252

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
            $table->unsignedInteger('id_evento')->nullable($value = false);
            $table->string('evento_nome',100)->nullable($value = false);
            $table->string('seats_key',100);
            $table->string('seats_public_key',100);
            $table->unsignedInteger('categoria_id')->nullable($value = false);
            $table->string('limite_ingressos_por_pedido')->nullable($value = false);
            $table->dateTim('data')->nulllable($value = false);
            $table->dateTim('data_final');
            $table->string('url_landing_page',100);
            $table->dateTime('dt_primeira_apresentacao')->nullable($value = false);
            $table->dateTime('dt_ultima_apresentacao')->nullable($value = false);
            $table->string('imagem_wide',100);
            $table->string('imagem_box',100);
            $table->string('imagem_mobile',100);
            $table->string('imagem_totem',100);
            $table->boolean('b_repeticao')->nullable($value = false);
            $table->unsignedInteger('destaque')->nullable($value = false);
            $table->unsignedInteger('nivel_destaque')->nullable($value = false);
            $table->boolean('b_assento_numerado')->nullable($value = false);
            $table->string('imagem_mapa',100);
            $table->dateTime('dt_fim_vendas_internet')->nullable($value = false);
            $table->string('pontos_venda',100);
            $table->unsignedDecimal('ingresso_inicial',5,2); //considerado o valor inicial(e único) do ingresso
            $table->unsignedInteger('repeticao_id');
            $table->string('url_portal',100);
            $table->text('descricao');
            $table->text('extras');
            $table->boolean('possui_produtros')->nullable($value = false);
            $table->boolean('encerrada')->nullable($value = false);
            $table->boolean('esgotado')->nullable($value = false);
            $table->unsignedInteger('local_id');
            $table->unsignedInteger('ingresso_quantidade'); // valor criado arbritariamente(pois não constava no json)

            // constraints

            $table->primary('id');
            $table->foreign('local_id')->references('local_id')->on('locals');








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

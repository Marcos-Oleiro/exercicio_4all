<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    public $id;
    public $id_evento;
    public $evento_nome;
    public $seats_key;
    public $seats_public_key;
    public $categoria_id;
    public $limite_ingresso_por_pedido;
    public $data;
    public $data_final;
    public $url_landing_page;

    public $dt_primeira_apresentacao;
    public $dt_ultima_apresentacao;
    public $imagem_wide;
    public $imagem_box;
    public $image_mobile;
    public $imagem_totem;
    public $ingresso_inicial;
    public $b_repeticao;
    public $destaque;
    public $nivel_destaque;

    public $b_assento_numerado;
    public $imagem_mapa;
    public $dt_fim_vendas_internet;
    public $repeticao_id;
    public $descricao;
    public $pontos_venda;
    public $extras;
    public $possui_produtos;
    public $encerrada;
    public $esgotado;

    public $url_portal;
    public $local_id;

}

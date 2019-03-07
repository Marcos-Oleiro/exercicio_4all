<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    public $id;
    public $evento_id;
    public $evento_nome;
    public $seats_key;
    public $seats_public_key;
    public $categoria_id;
    public $limite_ingressos_por_pedido;
    public $data;
    public $data_final;
    public $url_landing_page;

    public $dt_primeira_apresentacao;
    public $dt_ultima_apresentacao;
    public $imagem_wide;
    public $imagem_box;
    public $imagem_mobile;
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
    public $ingresso_quantidade;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'evento_id',
        'evento_nome',
        'seats_key',
        'seats_public_key',
        'categoria_id',
        'limite_ingressos_por_pedido',
        'data',
        'data_final',
        'url_landing_page',
        'dt_primeira_apresentacao',
        'dt_ultima_apresentacao',
        'imagem_wide',
        'imagem_box',
        'imagem_mobile',
        'imagem_totem',
        'ingresso_inicial',
        'b_repeticao',
        'destaque',
        'nivel_destaque',
        'b_assento_numerado',
        'imagem_mapa',
        'dt_fim_vendas_internet',
        'repeticao_id',
        'descricao',
        'pontos_venda',
        'extras',
        'possui_produtos',
        'encerrada',
        'esgotado',
        'url_portal',
        'local_id',
        'ingresso_quantidade'

    ];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    //

    public function index (){

        // $ev = new \App\Models\Evento;

        $events = \App\Models\Evento::all()->toArray();

        foreach ($events as $event) {
            $local = \App\Models\Local::where('id',$event['local_id'])->get()->toArray();
            $array_to_json = array("id" => $event['id'],
                            "evento_id" => $event['evento_id'],
                            "evento_nome" =>  $event['evento_nome'],
                            "seats_key" =>  $event['seats_key'],
                            "seats_public_key" =>  $event['seats_public_key'],
                            "categoria_id" => $event['categoria_id'],
                            "limite_ingressos_por_pedido" => $event['limite_ingressos_por_pedido'],
                            "data" =>  $event['data'],
                            "data_final" =>  $event['data_final'],
                            "url_landing_page"  =>  $event['url_landing_page'],
                            "dt_primeira_apresentacao"  =>  $event['dt_primeira_apresentacao'],
                            "dt_ultima_apresentacao"  =>  $event['dt_ultima_apresentacao'],
                            "imagem_wide"  =>  $event['imagem_wide'],
                            "imagem_box"  =>  $event['imagem_box'],
                            "imagem_mobile"  =>  $event['imagem_mobile'],
                            "imagem_totem"  =>  $event['imagem_totem'],
                            "local_id"  =>  $event['local_id'],
                            "local_nome"  =>  $local[0]['nome'],
                            "local_cidade"  =>  $local[0]['cidade'],
                            "local_uf"  =>  $local[0]['uf'],
                            "b_repeticao"  =>  $event['b_repeticao'],
                            "destaque"  =>  $event['destaque'],
                            "nivel_destaque"  =>  $event['nivel_destaque'],
                            "b_assento_numerado"  =>  $event['b_assento_numerado'],
                            "imagem_mapa"  =>  $event['imagem_mapa'],
                            "dt_fim_vendas_internet"  =>  $event['dt_fim_vendas_internet'],
                            "seo_title" => "" ,
                            "seo_meta_description"=> "" ,
                            "seo_meta_keywords"=> "" ,
                            "seo_og_title"=> "" ,
                            "seo_og_url"=> null ,
                            "seo_og_image"=> null ,
                            "seo_og_description"=> "",
                            "pontos_venda"  =>  $event['pontos_venda'],
                            "ingresso_inicial"  =>  $event['ingresso_inicial'],
                            "repeticao_id"  =>  $event['repeticao_id'],
                            "url_portal"  =>  $event['url_portal']);

        }
        // solução; array de array!!!!!



        return view('eventos.index',compact('ev'));
    }
}

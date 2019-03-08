<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    //

    public function index (){

        // $ev = new \App\Models\Evento;

        $events = \App\Models\Evento::all()->toArray();
        $array_to_json = array();


        // foreach para gerar o array que vai resultar no json
        foreach ($events as $event) {
            $local = \App\Models\Local::where('id',$event['local_id'])->get()->toArray();
            $array_aux = array("id" => $event['id'],
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

                            array_push($array_to_json,$array_aux);
                            $array_aux = array();

        }

        $str_json = json_encode($array_to_json);

        return view('eventos.index',compact('str_json'));
    }

    public function showDetails ($id){


        $array_aux = \App\Models\Evento::where('id',$id)->get()[0];
        // $array_aux = \App\Models\Evento::where('id',3619)->get()[0];
        $local = \App\Models\Local::where('id',$array_aux['local_id'])->get()[0]->toArray();

        $array_to_json = array(
            "id" => $array_aux['id'],
            "evento_id" => $array_aux['evento_id'],
            "evento_nome" => $array_aux['evento_nome'],
            "seats_key" => $array_aux['seats_key'],
            "seats_public_key" => $array_aux['seats_public_key'],
            "categoria_id" => $array_aux['categoria_id'],
            "limite_ingressos_por_pedido" => $array_aux['limite_ingressos_por_pedido'],
            "data" => $array_aux['data'],
            "data_final" => $array_aux['data_final'],
            "url_landing_page" => $array_aux['url_landing_page'],
            "dt_primeira_apresentacao" => $array_aux['dt_primeira_apresentacao'],
            "dt_ultima_apresentacao" => $array_aux['dt_ultima_apresentacao'],
            "imagem_wide" => $array_aux['imagen_wide'],
            "imagem_box" => $array_aux['imagem_box'],
            "imagem_mobile" => $array_aux['imagem_mobile'],
            "imagem_totem" => $array_aux['imagem_totem'],
            "local_id" => $array_aux['local_id'],
            "local_nome" => $local['nome'],
            "local_cidade" => $local['cidade'],
            "local_uf" => $local['uf'],
            "ingresso_inicial" => $array_aux['ingresso_inicial'],
            "b_repeticao" => $array_aux['b_repeticao'],
            "destaque" => $array_aux['destaque'],
            "b_assento_numerado" => $array_aux['b_assento_numerado'],
            "imagem_mapa" => $array_aux['imagem_mapa'],
            "repeticao_id" => $array_aux['repeticao_id'],
            "descricao" => $array_aux['descricao'],
            "pontos_venda" => $array_aux['pontos_venda'],
            "extras" => $array_aux['extras'],
            "local_endereco" => $local['endereco'],
            "local_numero" => $local['numero'],
            "local_complemento" => $local['complemento'],
            "local_bairro" => $local['bairro'],
            "local_cep" => $local['cep'],
            "local_lat" => $local['lat'],
            "local_lng" => $local['lng'],
            "possui_produtos" => $array_aux['possui_produtos'],
            "encerrada" => $array_aux['encerrada'],
            "esgotado" => $array_aux['esgotado'],
            "seo" => array(
                    "seo_title" =>"" ,
                    "seo_meta_description" =>"" ,
                    "seo_meta_keywords" =>"" ,
                    "seo_og_title" =>"" ,
                    "seo_og_url" =>null,
                    "seo_og_image" => null,
                    "seo_og_description" => ""
                )
        );

        $str_json = json_encode($array_to_json);



        return view ('eventos.details', compact('str_json'));

    }
}

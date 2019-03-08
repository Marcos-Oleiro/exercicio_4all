<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngressosController extends Controller
{
  //


    // busca os dados utilizados na view de compra de ingressos

    public function comprar ($id_evento){

        // quantidade de ingressos disponníveis
        $qtde_ingressos = \App\Models\Ingresso::where('id_evento',$id_evento)->where('vendido',0)->get()->count();

        $json_ingressos = json_encode(\App\Models\Ingresso::where('id_evento', $id_evento)->where('vendido', 0)->get());

        //máximo de ingressos por compra
        $qtde_max = \App\Models\Evento::select('limite_ingressos_por_pedido')->where('id', $id_evento)->get()[0]['limite_ingressos_por_pedido'] ;

        $valor_ingresso = \App\Models\Evento::select('ingresso_inicial')->where('id', $id_evento)->get()[0]['ingresso_inicial'];

        // versao para controle de concorrencia
        $versao_ingressos = \App\Models\Ingresso::select('versao')->where('id_evento',$id_evento)->get()[0]['versao'];

        return view ('ingressos.comprar', compact('json_ingressos','qtde_ingressos','valor_ingresso','qtde_max','id_evento','versao_ingressos'));
    }

    public function confirmarCompra(){

        // echo request()['id_evento'];
        // die();

        $versao_atual = \App\Models\Ingresso::select('versao')->where('id_evento', request()['id_evento'])->get()[0]['versao'];

        // Se as versões da tabela de ingressos forem diferentes, houve alguma compra e o ingresso do cliente pode não estar mais disponível, é necessário rrefazer a compra
        if (  request()['versao'] != $versao_atual )
            return $this->comprar(request()['id_evento']);

        // return request()->all();
        \App\Models\Ingressos::where('id_evento', request()['id_evento'])->update('versao', (request()['versao']+1) );
        $quantidade = request()['quantidade'];
        $total = (request()['quantidade']) * (request()['valor_unitario']);
        return view ('ingressos.finalizado',compact('quantidade','total'));




    }
}

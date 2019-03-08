@extends('layout')

@section('title','Compra de Ingresso')


@section('content')

    @php    $limite = ""  @endphp
    @if ( ($qtde_max < $qtde_ingressos) || ($qtde_max == $qtde_ingressos) )
        @php $limite = $qtde_max @endphp
    @else
        @php $limite = $qtde_ingressos @endphp
    @endif

    <form action="@php echo url("ingressos/confirmarCompra"); @endphp" method="POST" id="form_compra">
        {{ csrf_field() }}
        Quantidade de Ingressos : <input type="text" name="quantidade" onkeypress="return validaNumero(event)"
                                                      onkeyup="calcularValor(this.value,@php echo __("$valor_ingresso"); @endphp,@php echo __("$limite"); @endphp  )"> <br><br>
        <input type="submit" value="Confirmar Compra">
        <input type="hidden" name="valor_unitario" value="@php echo __($valor_ingresso) ; @endphp">
        <input type="hidden" name="id_evento" value="@php echo __($id_evento) ; @endphp">
        <input type="hidden" name="versao" value="@php echo __($versao_ingressos) ; @endphp">


    </form>
    <br><br>
    Total da Compra : R$<span id="total"></spam>


@endsection



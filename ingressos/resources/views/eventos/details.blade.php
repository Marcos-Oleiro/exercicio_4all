@extends('layout')


@section('title','Detalhes')

@section('content')
    @php
        $semana = array(
        'Sun' => 'Domingo',
        'Mon' => 'Segunda-Feira',
        'Tue' => 'Terca-Feira',
        'Wed' => 'Quarta-Feira',
        'Thu' => 'Quinta-Feira',
        'Fri' => 'Sexta-Feira',
        'Sat' => 'Sábado'
        );
        $meses =  array(
        'Jan' => 'Janeiro',
        'Feb' => 'Fevereiro',
        'Mar' => 'Março',
        'Apr' => 'Abril',
        'May' => 'Maio',
        'Jun' => 'Junho',
        'Jul' => 'Julho',
        'Aug' => 'Agosto',
        'Sep' => 'Setembro',
        'Oct' => 'Outubro',
        'Nov' => 'Novembro',
        'Dec' => 'Dezembro'
        );

        $detalhes = json_decode($str_json,true);
    @endphp

    <div>
        <h1>
            @php echo __($detalhes['evento_nome']); @endphp
        </h1>
    </div>

    <div>
        @php echo __($detalhes['descricao']); @endphp
    </div>

    <div>
        Ingressos a partir de R$ @php echo __($detalhes['ingresso_inicial']);  @endphp
        <br><br>
        <button><a href="@php echo url("ingressos/comprar/{$detalhes['id']}"); @endphp">  Comprar Ingressos</a></button>
    </div>

    <br><br><br>
    <div>
                Data(s): <br><br>
                @if (  (new DateTime($detalhes['dt_primeira_apresentacao'])) == (new DateTime($detalhes['dt_ultima_apresentacao'])))

                    <div class="data">
                        @php
                            $data = new DateTime($detalhes['dt_primeira_apresentacao']);
                        @endphp

                        <center>@php  echo $semana[$data->format('D')]."<br>";@endphp </center>

                        <center>@php     echo $data->format('d')."<br>";@endphp </center>

                        <center>
                        @php
                            echo "<hr>";
                            echo $meses[$data->format('M')];

                        @endphp
                        </center>
                    </div>

                @else
                    <div>
                        <div class="data">
                            @php
                                $data_primeiro = new DateTime($detalhes['dt_primeira_apresentacao']);
                            @endphp

                            <center>@php  echo $semana[$data_primeiro->format('D')]."<br>";@endphp </center>

                            <center>@php     echo $data_primeiro->format('d')."<br>";@endphp </center>

                            <center>
                            @php
                                echo "<hr>";
                                echo $meses[$data_primeiro->format('M')];

                            @endphp
                            </center>
                        </div>
                        <br>
                        <div class="data">

                            @php
                                $data_ultima = new DateTime($detalhes['dt_ultima_apresentacao']);
                            @endphp

                            <center>@php  echo $semana[$data_ultima->format('D')]."<br>";@endphp </center>

                            <center>@php     echo $data_ultima->format('d')."<br>";@endphp </center>

                            <center>
                            @php
                                echo "<hr>";
                                echo $meses[$data_ultima->format('M')];

                            @endphp
                            </center>
                        </div>
                    </div>

                @endif




    </div>
@endsection



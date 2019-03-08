@extends('layout')


@section('title','Eventos Disponíveis')

@section('content')

    <div>

        <h1> Veja os eventos disponíveis para compra de ingressos</h1>
    </div>

    <div>
        <ul>
        @php
            $array_aux = json_decode($str_json,true);

            foreach ($array_aux as $a) {
        @endphp
                <li>
                    <a href="@php echo url("/eventos/{$a['id']}"); @endphp">
        @php
                        echo "Nome: " . $a['evento_nome']."<br>";
                        echo "Local: " . $a['local_nome']."<br>";
                        $data_ev = new DateTime($a['data']);
                        echo "Data: " . $data_ev->format('d/m/Y') ."<br>";
                        echo "Horário: " . $data_ev->format('G:i') ."<br>";



                        echo "<br>";

        @endphp
                    </a>
                </li>
        @php
                echo "<br>";

        @endphp
        @php
            }
        @endphp
        </ul>
    </div>
@endsection

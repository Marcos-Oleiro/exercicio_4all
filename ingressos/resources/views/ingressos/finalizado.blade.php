@extends("layout")

@section("content")

    <p>Parabéns, você acabou de efetuar a compra de @php echo __($quantidade); @endphp ingresso(s) no valor de R$ @php echo __($total); @endphp
@endsection

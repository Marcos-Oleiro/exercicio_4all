<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title','Exercício 4all')</title>
</head>

<body>
    <div>
        <ul>
            <li>
                <a href="/"> Home </a>
            </li>
        </ul>

        @yield('content')
    </div>


</body>
<footer>
    <script src="{{ asset('js/functions.js')}}"></script>
</footer>
</html>

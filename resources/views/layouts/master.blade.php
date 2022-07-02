<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $_ENV["APP_NAME"] }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/f677a13f9c.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    @yield('popup')

    {{-- Navigation --}}
    <header>

        <div class="flex">
            <a href="/">
                <h2 class="logo">{{ $_ENV["APP_NAME"]}}</h2>
            </a>
            <i class="fa-solid fa-bars"></i>
        </div>


        <nav class="navigation hide">
            <ul>
                <li><a href="#personal-info">Over mezelf</a></li>
                <li><a href="#projects">Projecten</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <ul class="icons">
                <li><a href=""><i class="fa-brands fa-github-square"></i></a></li>
                <li><a href="https://www.linkedin.com/in/iris-maenhout" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a></li>
            </ul>
        </nav>

    </header>

    {{-- Content --}}
    <div class="content">
        @yield('content')
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('js/header.js') }}"></script>
    @yield('scripts')

</body>

</html>

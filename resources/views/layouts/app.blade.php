<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav menu_otstup">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Документы ОСББ <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Протоколы правления</a></li>
                                <li><a href="#">Листы голосования</a></li>
                                <li><a href="#">Отчеты ревизионной комиссии</a></li>
                                {{--<li><a href="#">Ссылка</a></li>--}}
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Внутренние услуги <span class="caret"></span></a>
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Электрик</a></li>--}}
                                {{--<li><a href="#">Слесарь</a></li>--}}
                                {{--<li><a href="#">Газовщик</a></li>--}}
                                {{--<li><a href="#">Пошив изделий</a></li>--}}
                                {{--<li><a href="#">ИТ специалисты</a></li>--}}
                                {{--<li><a href="#">Юристы \ Адвокаты</a></li>--}}
                                {{--<li><a href="#">Врачи</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Наши Дома <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Дом №20</a></li>
                                <li><a href="#">Дом №20а</a></li>
                                <li><a href="#">Дом №24</a></li>
                                <li><a href="#">Дом №26</a></li>
                                <li><a href="#">Дом №28</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Объявления <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Куплю\Продам</a></li>
                                <li><a href="#">Аренда жилья</a></li>
                                <li><a href="#">Отдам бесплатно</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Контакты <span class="caret"></span></a>
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Ссылка1</a></li>--}}
                                {{--<li><a href="#">Ссылка2</a></li>--}}
                                {{--<li><a href="#">Ссылка3</a></li>--}}
                            {{--</ul>--}}
                        </li>
                    </ul>




                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>

                                        @if(Auth::check() &&  Auth::user()->hasRole('admin'))
                                            <a href="{{ url('/admin') }}">Admin_Cabinet</a>
                                        @endif
                                            @if(Auth::check() &&  Auth::user()->hasRole('moderator'))
                                            <a href="{{ url('/admin') }}">Admin_Cabinet</a>
                                        @endif
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


    <link href="/css/rechnoe.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>

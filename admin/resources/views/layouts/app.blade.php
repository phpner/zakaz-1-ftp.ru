<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="/favicon.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/admin/public/vendor/jasekz/laradrop/css/styles.css">

    <!-- Styles -->
    <link href="{{ asset('/mebel/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/mebel/css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/mebel') }}">
                    {{ config('app.name', 'vadshop') }}
                </a>
                <ul class="navbar-nav ml-auto">
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">Все товары</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add_page') }}">Добавить товар</a>
                    </li>
                       <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('seo') }}">SEO</a>
                        </li>
                        -->
                    @endif
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--Model-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                </div>
                <div class="modal-body">
                    <div class="laradrop" laradrop-csrf-token="sMfv86amdJ9yymKXsyZ32pKvrcsyAMNRi7yrCI5F" ></div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    <!--end Model-->
    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
    <script src="{{ asset('/mebel/js/bootstrap.min.js') }}"  defer></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js" defer></script>
    <script src="/admin/public/vendor/jasekz/laradrop/js/enyo.dropzone.js" defer></script>
    <script src="/admin/public/vendor/jasekz/laradrop/js/laradrop.js" defer></script>
    <script src="{{ asset('/mebel/js/tinymce.min.js') }}" defer ></script>
    <script>
        $(document).ready(function () {
            var links = $(".navbar-nav .nav-link");

            $(links).each(function () {

                var href = $(this).attr('href');

                if(location.href == href){
                    $(this).addClass('active')
                }
            });
        });
    </script>
    @yield('sctipt')
</body>
</html>

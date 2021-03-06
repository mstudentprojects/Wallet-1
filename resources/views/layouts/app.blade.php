<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', 'کیف پول')
    </title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container">

        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand big-brand" href="{{ route('index') }}">کیف پول</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left big-menu">
                        
                        <li><a href="{{ route('index') }}">خانه</a></li>
                        <li><a href="#">مشاهده نمونه کیف</a></li>

                        @if (Route::has('login'))
                            @auth
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    خروج</a>
                                    <form id="logout-form" action="{{ route('logout') }}"    method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth()->user()->username }}
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        
                                        <li class="pull-right">
                                            <a href="{{ route('dashboard')}}">داشبورد</a>
                                        </li>

                                        <li class="pull-right">
                                            <a href="{{ route('wallets.index')}}">مشاهده کیف ها</a>
                                        </li>

                                        <li class="pull-right">
                                            <a class="pull-right" href="{{ route('wallets.create') }}">ایجاد کیف جدید</a>
                                        </li>

                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}">ورود</a></li>
                                <li><a href="{{ route('register') }}">ثبت نام</a></li>
                            @endauth
                        @endif                        
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

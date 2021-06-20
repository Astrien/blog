<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width+device-width, user-scalable=no, initial-scale=0.1, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? ''}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{asset('js/app.js')}}"></script>

    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <div class=" collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="col-6 navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Главная</a>
            </li>
            <li class="nav-item offset-3">
                <a class="nav-link active" aria-current="page" href="{{route('post.create')}}">Создать пост</a>
            </li>
        </ul>
        <form class="d-flex" action="{{route('post.index')}}">
            <input class="form-control me-2"  name="search" type="search" placeholder="Найти пост..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Поиск</button>
        </form>
        <ul class="navbar-nav ml-auto offset-1">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    </div>
</nav>

<div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        @endif

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @yield('content')
</div>

</body>
</html>

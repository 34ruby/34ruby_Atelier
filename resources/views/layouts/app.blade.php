<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('js/jquery.flex-images.js') }}"></script>
    <script src="{{ asset('js/jquery.watermark.min.js') }}"></script>
    {{-- <link href="{{ asset('css/update.css') }}" rel="stylesheet"> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link href="/path/to/tailwind.css" rel="stylesheet"> --}}
    {{-- <link rel="shortcut icon" href="https://pixabay.com/favicon.ico"> --}}
    <link rel="shortcut icon" href="{{URL::asset('/images/favicon.ico')}}" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.flex-images.css') }}" rel="stylesheet">
    {{-- Self Design --}}
    {{-- <link rel="stylesheet" href="https://cdn.rawgit.com/yahoo/pure-release/v0.6.0/pure-min.css"> --}}
    {{-- <link rel="stylesheet" href="jquery.flex-images.css"> --}}

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Atelier') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <a class="nav-link" href="{{ url('/pictures') }}">메인</a>
                    <a class="nav-link" href="{{ url('/upload') }}">업로드</a>
                    <a class="nav-link" href="{{ url('/posts') }}">사진 관리</a>
                    <a class="nav-link" href="{{ url('/view') }}">문의하기</a>
                    <a class="nav-link" href="{{ url('/view') }}">사이트 소개</a>

                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto  mt-2">
                        <div class="form-group row mr-5">
                            <div class="col-xs-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Image Search" aria-label="Image Search" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                        <svg xmlns="http://www.w3.org/2000/svg"  width="10" height="10" viewBox="0 0 24 24">
                                        <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/>
                                    </svg>
                                    </button>
                                  </div>

                            </div>
                            </div>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                                        {{ __('Logout') }}
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

        <div id="fb-root"></div>

        <script>
            // new flexImages({selector: '#demo1', rowHeight: 140});


        </script>

        <main class="py-4">
            @yield('content')
        </main>




    </div>
</body>
</html>

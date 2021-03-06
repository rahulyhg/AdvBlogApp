<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('css/toastr.min.css') }}">

</head>

<body>
    <div id="app">
        <!-- Top Nav Bar goes form here!!! -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'AdvBlogApp') }}
                </a>
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
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
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
            <!-- Main container goes from here!!! -->        
            <div class="container mt-3" id="mainLayoutContainer">
                
                @if (Auth::check())
                    <!-- Side nav bar division goes from here!!! -->
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Side Navigation bar will go from here!!! -->
                            <ul class="list-group">

                                <li class="list-group-item">
                                    <a href="/home">Dashbord</a>
                                </li>

                                <li class="list-group-item">
                                        <a href="{{route('categories.show')}}">Categories</a>
                                </li>

                                <li class="list-group-item">
                                    <a href="{{route('categories.create')}}">Create a Category</a>
                                </li>

                                <li class="list-group-item">
                                    <a href="{{route('posts.create')}}">Create a new Post</a>
                                </li>

                            </ul>
                        </div>
                    <!-- Side nav bar division ends from here!!! -->
                    
                    <!-- main content area goes from here!!! -->
                        <div class="col-lg-8">
                            @yield('content')
                        </div>
                    <!-- main content area ends from here!!! -->
                    @else
                        @yield('content')
                    @endif
                </div>
            </div>
    </div>

    <!-- Imported Scripts -->
    <script src="{{ asset ('js/toastr.min.js') }}"></script>

    <script>
        @if(Session::has('success'))

            toastr.success("{{ Session::get('success') }}", {timeout: 2000});

        @endif
        @if(Session::has('updated'))

            toastr.info("{{ Session::get('updated') }}", {timeout: 2000});

        @endif
        @if(Session::has('deleted'))

            toastr.warning("{{ Session::get('deleted') }}", {timeout: 2000});

        @endif
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                    <!-- Modal -->
                    <ul class="nav navbar-nav">
                    <!-- Button trigger modal -->
                    <!-- Button trigger modal -->
                    @auth
                        
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                      Preview Resume
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" data-backdrop="false">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Your Resume</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="{{route('resume.preview')}}" width="100%" height="900"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a name="" id="" class="btn btn-primary" href="{{route('resume.generatePDF')}}" role="button">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
        @auth
        <main class="py-4 container">
            <nav aria-label="breadcrumb" class="col-md-8 col-md-offset-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item {{ request()->is('user_detail') ? 'active' : ''}}"><a href="{{route('user_detail.index')}}">Personal Details</a></li>
                    <li class="breadcrumb-item {{ request()->is('education') ? 'active' : ''}}"><a href="{{route('education.index')}}">Education</a></li>
                    <li class="breadcrumb-item {{ request()->is('experience') ? 'active' : ''}}"><a href="{{route('experience.index')}}">Working Experiences</a></li>
                    <li class="breadcrumb-item {{ request()->is('skill') ? 'active' : ''}}"><a href="{{route('skill.index')}}">List of Skills</a></li>
                </ol>
            </nav>
        @endauth

         <!-- validation error method -->
         <div >
            @if(session()->has('errors'))

            @foreach($errors->all() as $e)

            <div class="alert alert-danger" role="alert">
                <p>{{$e}}</p>
            </div>
            @endforeach
            @endif
        </div>
        @yield('content')
        </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}">
    </script>
    
</body>
</html>

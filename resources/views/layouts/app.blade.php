<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="author" content="Alan Crowne">
        <meta name="description" content="Tonic website etc">
        <meta name="keywords" content="Tonic, Agency, Creative">

        <title>{{ config('app.name', 'Tonic') }}</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="__{{ Route::currentRouteName() }}">
        @if(Route::currentRouteName()=="home")
        <svg id="morph" height="100%" width="100%" viewBox="0 0 1920 1080" preserveAspectRatio="none">
            <path class="morph" d="M0,1082h1920V939.5c0,0-145-80.5-488-80.5c-344,0-598,153-921,153S0,923,0,923V1082z" fill="#31006F"></path>
        </svg>
        @endif

        <div id="app">
            <header>
                <!-- Logo -->
                <div class="brand-logo">
                    <a href="/" class="logo-btn"></a>
                </div>
                <div class="services-nav">
                    <a href="/services/creative">Creative</a>
                    <a href="/services/technology">Technology</a>
                    <a href="/services/strategy">Strategy</a>
                </div>
                <!-- End Logo -->
                <!-- Menu Button -->
                <div class="menu-button" id="toggle">
                    <span class="top"></span>
                    <span class="bottom"></span>
                </div>

            </header>
                
            <div class="sub-menu">
                <div class="menu-inner">
                    <nav>
                        <ul>
                            <li><a href="/about-us">about</a></li>
                            <li><a href="/our-work">work</a></li>
                            <li><a href="/services">services</a></li>
                            <li><a href="/contact-us">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            @yield('content')
            @if(Route::currentRouteName()=="home")
            @else
            @include('partials.footer')
            @endif

        </div>
                    <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('scripts/jquery-3.5.1.slim.min.js') }}"></script>
        
        <script src="{{ asset('scripts/anime.min.js') }}"></script>
        <script src="{{ asset('scripts/gsap.min.js') }}"></script>
        <script src="{{ asset('scripts/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('scripts/TextPlugin.min.js') }}"></script>
        
	    @yield('script')
        <script>
            var span = $(".menu-button");
            $(span).click(function() {
                $(this).toggleClass('open');
                $(".sub-menu").toggleClass('__active');
            });
        </script>
       
    </body>
</html>

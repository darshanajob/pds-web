<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pathaduambara Pradeshiya Sabhawa">
        <meta name="author" content="Asanka Bopegedara">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PDPS') }}</title>

        <base href="{{asset('/')}}" target="_top">

        <!-- styles -->
        <link href="{{asset('css/site/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/site/bootstrap-responsive.css')}}}" rel="stylesheet">
        <link href="{{asset('css/site/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('css/site/google-code-prettify/prettify.css')}}" rel="stylesheet">
        <link href="{{asset('css/site/flexslider.css')}}" rel="stylesheet">
        <link href="{{asset('color/default.css')}}" rel="stylesheet">
        <link href="{{asset('css/site/style.css')}}" rel="stylesheet">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="{{asset('img/ico/favicon1.ico')}}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('img/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('img/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('img/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('img/ico/apple-touch-icon-57-precomposed.png')}}">
    </head>

    <body>
        <div id="wrapper">
            @include('partials.siteHeader')
            <div class="language">
		
            </div>
            @yield('menuLocation')
			<!--@include('partials.flash-message')-->
            <section id="maincontent">
                <div class="container">
                    @yield('content')
                </div>
            </section>
			@include('partials.siteFooter')
        </div>

        <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

        <script src="{{asset('js/site/jquery.js')}}"></script>
        <script src="{{asset('js/site/raphael-min.js')}}"></script>
        <script src="{{asset('js/site/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/site/bootstrap.js')}}"></script>
        <script src="{{asset('js/site/google-code-prettify/prettify.js')}}"></script>
        <script src="{{asset('js/site/jquery.elastislide.js')}}"></script>
        <script src="{{asset('js/site/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('js/site/jquery.flexslider.js')}}"></script>
        <script src="{{asset('js/site/jquery-hover-effect.js')}}"></script>
        <script src="{{asset('js/site/animate.js')}}"></script>

        <!-- Template Custom JavaScript File -->
        <script src="{{asset('js/site/custom.js')}}"></script>

    </body>
</html>
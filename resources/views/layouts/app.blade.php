<!DOCTYPE html>
<html >
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

        <!-- styles -->
		<link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

		<!-- Bootstrap CSS -->
		<link href="{{asset('css/app/bootstrap.min.css')}}" rel="stylesheet">
		<!-- bootstrap theme -->
		<link href="{{asset('css/app/bootstrap-theme.css')}}" rel="stylesheet">
		<!--external css-->
		<!-- font icon -->
		<link href="{{asset('css/app/elegant-icons-style.css')}}" rel="stylesheet" />
		<link href="{{asset('css/app/font-awesome.min.css')}}" rel="stylesheet" />

		<!-- Custom styles -->
		<link href="{{asset('css/app/style.css')}}" rel="stylesheet">
		<link href="{{asset('css/app/style-responsive.css')}}" rel="stylesheet" />
	</head>
	<body>
		<section id="container" class="">
			@include('partials.appHeader')

			@include('partials.appSidebar')

			<section id="main-content">
				<section class="wrapper">
					@yield('menuLocation')
					@include('partials.flash-message')
					@yield('content')
				</section>
			</section>

			<div class="text-right">
				<div class="credits">
					<a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
		</section>

		<!-- javascripts -->
		<script src="{{asset('js/app/jquery.js')}}"></script>
		<script src="{{asset('js/app/bootstrap.min.js')}}"></script>
		<!-- nice scroll -->
		<script src="{{asset('js/app/jquery.scrollTo.min.js')}}"></script>
		<script src="{{asset('js/app/jquery.nicescroll.js')}}" type="text/javascript"></script>
		<!-- jquery ui -->
		<script src="{{asset('js/app/jquery-ui-1.9.2.custom.min.js')}}"></script>
		<!--custom checkbox & radio-->
		<script src="{{asset('js/app/ga.js')}}" type="text/javascript" ></script>
		<!--custom switch-->
		<script src="{{asset('js/app/bootstrap-switch.js')}}"></script>
		<!--custom tagsinput-->
		<script src="{{asset('js/app/jquery.tagsinput.js')}}"></script>
		<!-- bootstrap-wysiwyg -->
		<script src="{{asset('js/app/jquery.hotkeys.js')}}"></script>
		<script src="{{asset('js/app/bootstrap-wysiwyg.js')}}"></script>
		<script src="{{asset('js/app/bootstrap-wysiwyg-custom.js')}}"></script>
		<!-- ck editor -->
		<script src="{{asset('assets/ckeditor/ckeditor.js')}}" type="text/javascript" ></script>
		<!-- custom form component script for this page-->
		<script src="{{asset('js/app/form-component.js')}}"></script>
		<!-- custome script for all page -->
        <script src="{{asset('js/app/scripts.js')}}"></script>


	</body>
</html>

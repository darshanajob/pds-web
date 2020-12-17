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

	<body class="login-img3-body">
		<div class="container">
			<header class="header dark-bg">
				<!--logo start-->
				<a href="{{url( 'welcome') }}" class="logo" target="_blank">
					<span id="lgRgText">
					{{ __('PATHADUMBARA REGIONAL COUNCIL') }}
					</span>
				</a>
				<!--logo end-->
			</header>

			<form method="POST" action="{{ route('login', app()->getLocale()) }}" class="login-form" class="form-validate form-horizontal">
				@csrf
				<div class="login-wrap">
					<p class="login-img">
						<i class="icon_lock_alt"></i>
					</p>
					<div class="input-group-error">
						@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>
					<div class="input-group">
						
						<span class="input-group-addon">
							<i class="icon_profile"></i>
						</span> 
					
						<input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('Username') }}" required autofocus>
					</div>
					
					<div class="input-group">
						<span class="input-group-addon">
							<i class="icon_key_alt"></i>
						</span>

						<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>

						@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>

					<label class="checkbox">
						<input type="checkbox" class="form-check-input" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}

						<span class="pull-right">
							@if (Route::has('password.request'))
								<a href="{{ route('password.request', app()->getLocale()) }}">
									{{ __('Forgot Password?') }}
								</a>
							@endif
						</span>
					</label>

					<button class="btn btn-primary btn-lg btn-block" type="submit" id="btnLg">{{ __('Login') }}</button>

					<a href="{{route('register', app()->getLocale()) }}">
						<button class="btn btn-info btn-lg btn-block" type="button"> {{ __('Signup') }} </button>
					</a>
				</div>
			</form>

		</div>
  </body>
</html>

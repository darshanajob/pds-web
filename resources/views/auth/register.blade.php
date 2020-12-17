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
                    <form method="POST" action="{{ route('register', app()->getLocale()) }}" class="register-form"  enctype="multipart/form-data">
                    @csrf
					<div class="register-wrap">
					<p class="register-img">
						<i class="icon_id-2_alt"></i>
					</p>

                        <div class="form-group row">
                            <label for="email" id="regLbl" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" id="regLbl" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" id="regLbl" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="category" id="regLbl" class="col-md-4 col-form-label text-md-right">{{ __('User Category') }}</label>

                            <div class="col-md-8">
                                <Select id="category" class="form-control" name="user_category" required>
									<option value=""> - {{ __('Please Select') }} - </option>
									<option value="2"> {{ __('Council Officer') }} </option>
									<option value="3"> {{ __('Council Member') }} </option>
									<option value="4"> {{ __('Village Officer') }} </option>
								</select>
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="display_name" id="regLbl" class="col-md-4 col-form-label text-md-right">{{ __('Display Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control{{ $errors->has('dname') ? ' is-invalid' : '' }}" name="dname" required>
                            </div>

							 @if ($errors->has('dname'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('dname') }}</strong>
								</span>
                            @endif
                        </div>

						<div class="form-group row">
                            <label for="profile-pic" id="regLbl" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                            <div class="col-md-8">
                                <input id="profilePic" type="file" class="form-control" name="profile_Pic">
                            </div>
                        </div>

						<button class="btn btn-primary btn-lg btn-block" type="submit" id="btnRg">{{ __('Register') }}</button>

                    </form>

		</div>
  </body>
</html>

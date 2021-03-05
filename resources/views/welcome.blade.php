@extends('layouts.app')

@section('document-title', 'promocionar')
@section('page', 'promocionar')

@section('content')

<div id="wrapper" class="home">

<div id="main">
		<div class="container">
				<div class="row">
						<div class="col-lg-12">

								<div class="account-wall">
										<section class="align-lg-center">
										<div class="site-logo"></div>
										<h1 class="login-title"><span>BIEN</span>VENIDO <small> Gestionar Admin System</small></h1>
										</section>
										<form method="POST" action="{{ route('login') }}"  id="form-signin" class="form-signin">
											@csrf

										 <div class="input-group">
												<div class="input-group-addon"><i class="fa fa-user"></i></div>
												 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="usuario">
												 @error('email')
														 <span class="invalid-feedback" role="alert">
																 <strong>{{ $message }}</strong>
														 </span>
												 @enderror
										</div>

										<div class="input-group">
												<div class="input-group-addon"><i class="fa fa-key"></i></div>
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

												@error('password')
														<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
														</span>
												@enderror
										</div>

										 <!--
										 <div class="form-group row">
												 <div class="col-md-6 offset-md-4">
														 <div class="form-check">
																 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

																 <label class="form-check-label" for="remember">
																		 {{ __('Remember Me') }}
																 </label>
														 </div>
												 </div>
										 </div>
									 -->
										 <div class="form-group row mb-0">
												 <div class="col-md-8 offset-md-4">
														 <button type="submit"  class="btn btn-lg btn-theme-inverse btn-block" id="sign-in">
																 {{ __('Login') }}
														 </button>
														 <!--
														 @if (Route::has('password.request'))
																 <a class="btn btn-link" href="{{ route('password.request') }}">
																		 {{ __('Forgot Your Password?') }}
																 </a>
														 @endif
													 -->
												 </div>
										 </div>
										</form>

								</div>
								<!-- //account-wall-->

						</div>
						<!-- //col-sm-6 col-md-4 col-md-offset-4-->
				</div>
				<!-- //row-->
		</div>
		<!-- //container-->

</div>
<!-- //main-->


</div>

@endsection

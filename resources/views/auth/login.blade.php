@extends('layouts.app')

@section('content')
<div class="container">
    <div>
	    <h1> Welcome to <br/> DURBAR PARKING </h1>
		<p>About durbar parking.</p>
	</div>
			
    <div>
		<div class="box box-blue">
			<p><strong>Welcome to DURBAR PARKING</strong> Login Here!</p>
		</div>

		<form class="box" id="form"  method="POST" action="{{ route('login') }}">
            @csrf
			
			<div class="form-control">
				<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email."/>
				<img src="./images/icon-error.svg" alt="error-icon" />
				<small>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </small>
			</div>

			<div class="form-control">
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Enter your password">
				<img src="./images/icon-error.svg" alt="error-icon" />
				<small>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </small>
            </div>

            <div class="form-control">
				<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><p>Remember Me</p>
            </div>

			<button>{{ __('Login') }}</button>
            <br>
            @if (Route::has('password.request'))
                <p><a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a></p>
            @endif
			
            <small>
				By clicking the button, You can register your account.
				<a href="{{ route('register') }}">Register</a>
			</small>

        </form>
	</div>
</div>
<style>
    *{
        overflow:hidden;
    }
    </style>

@endsection

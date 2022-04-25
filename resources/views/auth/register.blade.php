@extends('layouts.app')

@section('content')
<div class="container">
    
    <div>
		<h1> Welcome to <br/> DURBAR PARKING </h1>
			<p>About durbar parking.</p>
	</div>
			
    <div>
		<div class="box box-blue">
			<p><strong>Welcome to DURBAR PARKING</strong> Register here !</p>
		</div>


		<form class="box" id="form" method="POST" action="{{ route('register') }}">
            @csrf
			
            <div class="form-control">
				<input type="text" id="name" placeholder="Enter your name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
				<img src="./images/icon-error.svg" alt="error-icon" />
				<small> 
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </small>
			</div>

			<div class="form-control">
				<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email" />
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
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password" />
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
				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Please confirm your password" />
				<img src="./images/icon-error.svg" alt="error-icon" />
				<small></small>
			</div>

			<button>{{ __('Register') }}</button>
			<small>
				By clicking the button, you can login your account.
				<a href="{{ route('login') }}">Login</a>
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

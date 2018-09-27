@extends('layouts.app')
@section('title','Sign In')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url({{asset('images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						<span class="sign-in-title-disabled">Sign In</span> /
                        <a class="sign-up-title" href="{{ route('register') }}">Sign Up</a>
					</span>
            </div>

            <form class="login100-form validate-form"  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Email</span>
                    <input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required  autofocus>
                    <span class="focus-input100"></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"  name="password" placeholder="Enter password" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="{{ route('password.request') }}" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

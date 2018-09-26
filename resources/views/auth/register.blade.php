@extends('layouts.app')
@section('title','SignUp')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url({{asset('images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						<a class="sign-in-title" href="{{ route('login') }}">Sign In</a> /
                        <span class="sign-up-title-disabled">Sign Up</span>
					</span>
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}"
                      aria-label="{{ __('Register') }}">
                    @csrf

                    {{--<div class="wrap-input100 validate-input m-b-26" data-validate="Avatar is required">--}}
                        {{--<span class="label-input100">Avatar</span>--}}
                        {{--<input type="file" name="image" placeholder="Enter first name" value="{{ old('image') }}"--}}
                               {{--required>--}}
                    {{--</div>--}}

                    <div class="wrap-input100 validate-input m-b-26" data-validate="First name is required">
                        <span class="label-input100">First name</span>
                        <input class="input100 {{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text"
                               name="first_name" placeholder="Enter first name" value="{{ old('first_name') }}" required
                               autofocus>
                        <span class="focus-input100"></span>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Last name is required">
                        <span class="label-input100">Last name</span>
                        <input class="input100 {{ $errors->has('lastName') ? ' is-invalid' : '' }}" type="text"
                               name="last_name" placeholder="Enter last name" value="{{ old('last_name') }}" required>
                        <span class="focus-input100"></span>

                        @if ($errors->has('lastName'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Country is required">
                        <span class="label-input100">Your country</span>
                        <input class="input100 {{ $errors->has('country') ? ' is-invalid' : '' }}" type="text"
                               name="country" placeholder="Enter country" value="{{ old('country') }}" required>
                        <span class="focus-input100"></span>

                        @if ($errors->has('country'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="City is required">
                        <span class="label-input100">Your city</span>
                        <input class="input100 {{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city"
                               placeholder="Enter City" value="{{ old('city') }}" required>
                        <span class="focus-input100"></span>

                        @if ($errors->has('city'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Phone number is required">
                        <span class="label-input100">Phone number</span>
                        <input class="input100 {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" type="text"
                               name="city" placeholder="Enter phone number e.g  +38(066) 666 9999"
                               value="{{ old('phone_number') }}" required>
                        <span class="focus-input100"></span>

                        @if ($errors->has('city'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
                               name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                               name="password" placeholder="Enter password" required>
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Confirm password</span>
                        <input class="input100" type="password" name="password_confirmation"
                               placeholder="Enter password" required>
                        <span class="focus-input100"></span>
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
                            Sign Up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

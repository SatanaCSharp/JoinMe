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

                    {{--<div class="avatar-upload">--}}
                        {{--<div class="avatar-edit">--}}
                            {{--<input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg"/>--}}
                            {{--<label for="imageUpload"></label>--}}
                        {{--</div>--}}
                        {{--<div class="avatar-preview">--}}
                            {{--<div id="imagePreview"--}}
                                 {{--style="background-image: url(data:image/jpeg;base64,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);"></div>--}}
                        {{--</div>--}}
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

                    {{--<div class="wrap-input100 validate-input m-b-26" data-validate="City is required">--}}
                        {{--<span class="label-input100">Your city</span>--}}
                        {{--<input class="input100 {{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" id="city"--}}
                               {{--name="city" placeholder="Enter City" value="{{ old('city') }}" autocomplete="on"--}}
                               {{--required>--}}
                        {{--<span class="focus-input100"></span>--}}

                        {{--@if ($errors->has('city'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('city') }}</strong>--}}
                                    {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="wrap-input100 validate-input m-b-26" data-validate="Phone number is required">--}}
                        {{--<span class="label-input100">Phone number</span>--}}
                        {{--<input class="input100 {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" type="text"--}}
                               {{--name="phone_number" placeholder="Enter phone number e.g  +38(066) 666 9999"--}}
                               {{--min="9" max="20" value="{{ old('phone_number') }}" required>--}}
                        {{--<span class="focus-input100"></span>--}}

                        {{--@if ($errors->has('city'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('phone_number') }}</strong>--}}
                                    {{--</span>--}}
                        {{--@endif--}}

                    {{--</div>--}}

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

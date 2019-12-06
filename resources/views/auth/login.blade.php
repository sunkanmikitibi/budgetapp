@extends('auth_layout.master')

@section('content')


<div class="auth-main2 particles_js">
        <div class="auth_div vivify fadeInTop">
            <div class="card">
                <div class="body">

                    <div class="login-img">
                        <img class="img-fluid" src="{{ asset('assets/images/login-img.png')}}" />
                    </div>

                    <form method="POST" class="form-auth-small" action="{{ route('login') }}">
                            @csrf
                        <div class="mb-3">
                            <p class="lead">{{ __('Login') }}</p>
                        </div>
                        <div class="form-group">
                                <label for="email" class="control-label sr-only">{{ __('E-Mail Address') }}</label>

                                    <input id="email" type="email" class="round form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                            </div>

                            <div class="form-group">
                                    <label for="password" class="control-label sr-only">{{ __('Password') }}</label>


                                        <input id="password" type="password" class="round form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                </div>
                                <div class="form-group clearfix">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="fancy-checkbox element-left form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>

                                    </div>


                        <div class="form-group row mb-0">
                                    <button type="submit" class="btn btn-round btn-block btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <div class="mt-4">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    </span>
                                    <span>Don't have an account? <a href="page-register.html">Register</a></span>
                                    </div>

                            </div>

                    </form>
                    <div class="pattern">
                        <span class="red"></span>
                        <span class="indigo"></span>
                        <span class="blue"></span>
                        <span class="green"></span>
                        <span class="orange"></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>


            </div>
        </div>
    </div>
</div>
@endsection

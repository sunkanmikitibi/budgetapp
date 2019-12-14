@extends('auth_layout.master')
@section('content')

<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);">
                <img src="../assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">
                Kobonet</a>
        </div>
        <div class="card">
            <div class="body">
                <p class="lead">Member Login</p>
                <form method="POST" action="{{ route('member-login') }}">
                        @csrf
                    <div class="form-group">
                        <label for="email" class="control-label sr-only">Email</label>

                        <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} round"  id="signin-email" value="{{ old('email') }}" placeholder="Email Address..." autofocus>
                        @if ($errors->has('email'))

                        <span class="invalid-feedback">

                            <strong>{{ $errors->first('email') }}</strong>

                        </span>

                    @endif
                    </div>
                    <div class="form-group">
                               <label for="password" class="control-label sr-only">Password</label>
                               <input id="password" type="password" class="round form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >



                            @if ($errors->has('password'))

                                <span class="invalid-feedback">

                                    <strong>{{ $errors->first('password') }}</strong>

                                </span>

                            @endif


                    </div>
                    <div class="form-group clearfix">

                        <label class="fancy-checkbox element-left">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span>Remember me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                    <div class="bottom">
                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                        <span>Don't have an account? <a href="page-register.html">Register</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
@endsection

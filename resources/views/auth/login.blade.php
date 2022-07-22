@extends('frontend.layouts.master')

@section('content')
<section class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            @include('backend.layouts.partials._messages')
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="login-form-head">
                    <h4>Sign In</h4>
                    <p>Hello there, Sign in and start managing your Appoinment.</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-gp">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row mb-4 rmber-area">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    Forgot Password?
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Login<i class="ti-arrow-right"></i></button>
                        
                        <div class="social-via-register">
                            <div class="social-via-text-block">
                                <p class="social-via-text">Or</p>
                            </div>
                            <div class="social-via-login">
                                <ul class="pl-0">
                                    <li><a href="" ><i style="color:#3B5997; border:2px solid #3B5997;" class="icofont-facebook outline-socisl-icon"></i></a></li>
                                    <li><a href=""><i class="icofont-twitter outline-socisl-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

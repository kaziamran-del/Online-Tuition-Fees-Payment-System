@extends('admin.admin_master')

@section('page_title')
    login | admin panel
@endsection

@section('admin_content')
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('login')}}" method="POST">
                            {{csrf_field()}}

                            <h3 class="text-center text-info">Login</h3>

                            <div class="form-group">
                                <label for="inputEmailAddress" class="text-info">{{ __('E-Mail Address') }}</label><br>

                                <input id="inputEmailAddress" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus placeholder="Enter email address" />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputPassword" class="text-info">Password</label><br>

                                <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="remember" class="text-info"><span>Remember me</span> <span><input id="remember" name="remember" type="checkbox" value="{{ old('remember') ? 'checked' : '' }} "/></span></label><br>

                                <button type="submit" class="btn btn-info btn-md">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div id="forgot-link" class="text-right">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
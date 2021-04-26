@extends('admin.admin_master')

@section('page_title')
    Password Reset | by gmail
@endsection

@section('admin_content')
    <div id="login">
         <h3 class="text-center text-white pt-5">Password Reset</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form id="login-form" class="form" action="{{route('password.update')}}" method="POST">
                            {{csrf_field()}}

                            <input type="hidden" name="token" value="{{ $token }}" />
                            
                            <div class="form-group">
                                <label for="inputEmailAddress" class="text-info">{{ __('E-Mail Address:') }}</label><br>

                                <input id="inputEmailAddress" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="inputPassword" class="text-info">Password:</label><br>

                                <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" laceholder="Enter password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="text-info">{{ __('Confirm Password:') }}</label><br>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                     {{ __('Reset Password') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

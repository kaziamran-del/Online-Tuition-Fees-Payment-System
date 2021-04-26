@extends('admin.admin_master')

@section('page_title')
    Reset Password | login
@endsection

@section('admin_content')
    <div id="login">
        <h3 class="text-center text-white pt-5">Reset Password</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form id="login-form" class="form" action="{{route('password.email')}}" method="POST">
                            {{csrf_field()}}

                            @if(session('error'))
                                <div> {{session('error')}}</div>                
                            @endif

                            @if(session('success'))
                                <div> {{session('success')}}</div>    
                            @endif

                            <div class="form-group">
                                <label for="email" class="text-info">{{ __('E-Mail Address:') }}</label><br>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                     {{ __('Send Password Reset Link') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

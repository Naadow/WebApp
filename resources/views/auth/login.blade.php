@extends('layouts.main')

@section('content')
<div class="container">
                
                    <form class="form-login" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div style="font-size:35px; color:#fff;opacity: 0.7;" class="card-header">{{ __('Login') }}</div><br>
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                           

                            <div class="col-md-6">
                            @error('email')
                                    <br><span style="color:lightgreen"  class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong><br>
                                    </span><br>
                                @enderror
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                               
                            </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    

                                    <input style="transform: scale(2); width:auto " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="margin-top:500px !important" class="form-check-label" for="remember">
                                    
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                   


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <button class="button-Glass">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <br><a  href="{{ route('password.request') }}">
                                        <input style="margin-bottom:0px" type="button" value="Reset Password" /><br>
                                    </a><br>
                                @endif
                                <a href="{{ route('register') }}">
                                     <input style="margin-top:0px" type="button" value="Register" /><br>
                                </a>
                            </div>
                        </div>
                        <br>
                    </form>
                <div class="drops">
                    <div class="drop drop-1"></div>
                    <div class="drop drop-2"></div>
                    <div class="drop drop-3"></div>
                    <div class="drop drop-4"></div>
                    <div class="drop drop-5"></div>
                </div>
</div>


@endsection



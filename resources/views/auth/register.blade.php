@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div style="font-size:35px; color:#fff;opacity: 0.7;" class="card-header">{{ __('Register') }}</div><br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input class="input-glassmorphism" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <br><span style="color:lightgreen"  class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong><br>
                                    </span><br>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input class="input-glassmorphism" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <br><span style="color:lightgreen"  class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong><br>
                                    </span><br>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input class="input-glassmorphism" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <br><span style="color:lightgreen"  class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong><br>
                                    </span><br>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input class="input-glassmorphism" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="button-Glass" type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <a href="{{ route('login') }}">
                            <input class="input-glassmorphism" type="button" value="Login" /><br>
                        </a>
                    </form>
                    <div class="drops">
                    <div class="drop drop-1"></div>
                    <div class="drop drop-2"></div>
                    <div class="drop drop-3"></div>
                    <div class="drop drop-4"></div>
                    <div class="drop drop-5"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

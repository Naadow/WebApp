@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div style="font-size:35px; color:#fff;opacity: 0.7;" class="card-header">{{ __('Reset Password') }}</div><br>
                        <div class="form-group row">
                            <br><label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <br><span style="color:lightgreen"  class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong><br>
                                    </span><br>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="button-Glass" type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                        <a href="{{ url('/') }}">
                            <input type="button" value="Home" /><br>
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

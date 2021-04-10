@extends('layouts.main')
@section('content')
<header>
<!doctype html>
</header>    
<body>
    <div class="container">
   <form >
     <p>Welcome</p>

      @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">
                            <input class="input-glassmorphism" type="button" value="Home" /><br>
                        </a>
                        @else
                        <a href="{{ route('login') }}">
                            <input class="input-glassmorphism" type="button" value="Login" /><br>
                        </a>

                        @if (Route::has('register'))
                         
                            <a href="{{ route('register') }}">
                            <input class="input-glassmorphism" type="button" value="Register" /><br>
                        </a>
                        @endif
                    @endauth
                </div>
            @endif

   </form>

   <div class="drops">
     <div class="drop drop-1"></div>
     <div class="drop drop-2"></div>
     <div class="drop drop-3"></div>
     <div class="drop drop-4"></div>
     <div class="drop drop-5"></div>
   </div>
 </div>    
    </body>
    @endsection
</html>

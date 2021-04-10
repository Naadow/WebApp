<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       

        <!-- Styles -->
        <style>
body {
 background: linear-gradient(to right, #3F5EFB, #FC466B);
 font-family: 'Montserrat', sans-serif;
}

.container {
 position: absolute;
 -webkit-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
 top: 50%;
 left: 50%;
}

form {
 background: rgba(255, 255, 255, 0.06);
 padding: 3em;
 height: 320px;
 border-radius: 20px;
 border-left: 1px solid rgba(255, 255, 255, 0.3);
 border-top: 1px solid rgba(255, 255, 255, 0.3);
 -webkit-backdrop-filter: blur(10px);
         backdrop-filter: blur(10px);
 box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, 0.2);
 text-align: center;
 position: relative;
 -webkit-transition: all 0.2s ease-in-out;
 transition: all 0.2s ease-in-out;
}
form p {
 font-weight: 500;
 color: #fff;
 opacity: 0.7;
 font-size: 1.4rem;
 margin-top: 0;
 margin-bottom: 60px;
 text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
form a {
 text-decoration: none;
 color: #ddd;
 font-size: 12px;
}
form a:hover {
 text-shadow: 2px 2px 6px #00000040;
}
form a:active {
 text-shadow: none;
}
form input {
 background: transparent;
 width: 200px;
 padding: 1em;
 margin-bottom: 2em;
 border: none;
 border-left: 1px solid rgba(255, 255, 255, 0.3);
 border-top: 1px solid rgba(255, 255, 255, 0.3);
 border-radius: 5000px;
 -webkit-backdrop-filter: blur(5px);
         backdrop-filter: blur(5px);
 box-shadow: 4px 4px 60px rgba(0, 0, 0, 0.2);
 color: #fff;
 font-family: Montserrat, sans-serif;
 font-weight: 500;
 -webkit-transition: all 0.2s ease-in-out;
 transition: all 0.2s ease-in-out;
 text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
form input:hover {
 background: rgba(255, 255, 255, 0.1);
 box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
}
form input[type="email"]:focus, form input[type="password"]:focus {
 background: rgba(255, 255, 255, 0.1);
 box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
}
form input[type="button"] {
 margin-top: 10px;
 width: 150px;
 font-size: 1rem;
}
form input[type="button"]:hover {
 cursor: pointer;
}
form input[type="button"]:active {
 background: rgba(255, 255, 255, 0.2);
}
form:hover {
 margin: 4px;
}

::-webkit-input-placeholder {
 font-family: Montserrat, sans-serif;
 font-weight: 400;
 color: #fff;
 text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

::-moz-placeholder {
 font-family: Montserrat, sans-serif;
 font-weight: 400;
 color: #fff;
 text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

:-ms-input-placeholder {
 font-family: Montserrat, sans-serif;
 font-weight: 400;
 color: #fff;
 text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

::-ms-input-placeholder {
 font-family: Montserrat, sans-serif;
 font-weight: 400;
 color: #fff;
 text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

::placeholder {
 font-family: Montserrat, sans-serif;
 font-weight: 400;
 color: #fff;
 text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

.drop {
 background: rgba(255, 255, 255, 0.06);
 -webkit-backdrop-filter: blur(10px);
         backdrop-filter: blur(10px);
 border-radius: 10px;
 border-left: 1px solid rgba(255, 255, 255, 0.3);
 border-top: 1px solid rgba(255, 255, 255, 0.3);
 box-shadow: 10px 10px 60px -8px rgba(0, 0, 0, 0.2);
 position: absolute;
 -webkit-transition: all 0.2s ease;
 transition: all 0.2s ease;
}
.drop-1 {
 height: 80px;
 width: 80px;
 top: -20px;
 left: -40px;
 z-index: -1;
}
.drop-2 {
 height: 80px;
 width: 80px;
 bottom: -30px;
 right: -10px;
}
.drop-3 {
 height: 100px;
 width: 100px;
 bottom: 120px;
 right: -50px;
 z-index: -1;
}
.drop-4 {
 height: 120px;
 width: 120px;
 top: -60px;
 right: -60px;
}
.drop-5 {
 height: 60px;
 width: 60px;
 bottom: 170px;
 left: 90px;
 z-index: -1;
}

a,
input:focus,
select:focus,
textarea:focus,
button:focus {
 outline: none;
}



</style> 


<!-- Choose option -->

    </head>
    <body>
    <div class="container">
   <form >
     <p>Welcome</p>

      @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                            <input type="button" value="Home" /><br>
                        </a>
                        @else
                        <a href="{{ route('login') }}">
                            <input type="button" value="Login" /><br>
                        </a>

                        @if (Route::has('register'))
                         
                            <a href="{{ route('register') }}">
                            <input type="button" value="Register" /><br>
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
</html>

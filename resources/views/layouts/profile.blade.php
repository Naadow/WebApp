
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">        
            <div class="container">
                <div class="row justify-content-center">

                

                    <div class="col-md-8">
                        <div class="card">
                            <div class="row">
                        <div style="text-align:left; margin-bottom:5px" class="col">
                         
                         @yield('ProfileDropDown')
                        
                        </div>
                        </div>
                      
                        
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

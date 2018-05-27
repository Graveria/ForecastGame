<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Forecasts</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Grototo') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        {{--  Global navigation  --}}
        @include('inc.navbar')

        <div class="col-md-12 col-ld-12">
            <div class="row">
                <div class="container">
                    {{--  Content for each page route  --}}
                    @yield('content')
                </div>
            </div>    
        </div>

    </body>

    {{--  Global footer  --}}
    <footer class="footer">
        {{--  <div class="container">  --}}
            <span class="text-muted fcast-text">Grototo by GA 2018 &#169</span>
        {{--  </div>  --}}
    </footer>
</html>
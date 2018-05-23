<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Forecasts</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        @include('inc.navbar')

        <div class="row">
            <div class="col-md-12 col-ld-12">
                @yield('content')
            </div>    
        </div>

    </body>
    <footer class="footer">
        <div class="container">
            <span class="text-muted fcast-text">Grototo by GA 2018 &#169</span>
        </div>
    </footer>
</html>
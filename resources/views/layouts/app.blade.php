<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" 
            type="image/png" 
            href="/images/favicon.png">

        <title>Care2Rock | Refactor</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
        <div class="w-full">
            @include('partials.header')
            @yield('content')
        </div>
    </body>
</html>
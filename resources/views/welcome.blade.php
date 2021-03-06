<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <meta name="api" content="{{ env('GOOGLE_MAP_API_KEY')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Scraps</title>
    </head>
    <body>
        <div id="app">
            <app></pp>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

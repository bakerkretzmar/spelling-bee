<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <meta name="twitter:title" content="{{ $page['props']['event']->title }}"> --}}

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('/js/app.js') }}" defer></script>

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
    </head>
    <body>

        @inertia

    </body>
</html>
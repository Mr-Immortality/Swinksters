<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="flex flex-col justify-center items-center my-auto min-h-screen">
            <h1 class="text-2xl">
                Oops....This page does not exist... click
                <a href="{{ url('/') }}" class="text-blue-500 hover:text-blue-800">here</a>
                to go back to the site!
            </h1>
            <img src="https://cdn.pixabay.com/photo/2016/04/24/13/24/error-1349562_1280.png" width=50% alt="error" class="mt-5">
        </div>
    </body>
</html>
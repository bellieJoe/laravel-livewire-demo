<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        
        {{-- styles --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Book Inventory</title>
        @livewireStyles
    </head>
    <body class="antialiased">
        @yield('content')
        @livewireScripts


        {{-- BOOTSTRAP NPM --}}
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>

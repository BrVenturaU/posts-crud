<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        <div class="p-4 container-fluid fixed-top">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/home') }}" class="text-muted">Dashboard</a>
                            @else   
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-muted">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
        {{ $slot }}
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    </head>
    <body class="font-sans antialiased bg-light">
        
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark">
              <i data-feather="menu"></i>
            </a>
            <livewire:navigation-menu>
            <!-- sidebar-wrapper  -->
            <main class="page-content">
              <div class="container-fluid">
                <div class="shadow card bg-light">
                    <div class="px-5 py-3 bg-white card-body border-bottom rounded-top">
                        {{$slot}}
                    </div>
                </div>
                    <hr>
                
                    <footer class="text-center">
                        <div class="mb-2">
                            <small>
                            © {{date("Y")}} hecho con <i data-feather="heart" class="text-danger"></i> por - <a target="_blank" rel="noopener noreferrer" href="https://github.com/BrVenturaU">
                                Brandon Manuel Ventura
                            </a>
                            </small>
                        </div>
                    </footer>
                </div>
            </main>
            <!-- page-content" -->
        </div>

        @stack('modals')
        @stack('scripts')
    </body>
</html>

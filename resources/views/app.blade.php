<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title inertia>{{ config('app.name', 'Laravel') }}</title> --}}

        <link rel="icon" type="image/png"  sizes="16x16" href="{{  asset('images/favicon.png') }}"/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('datepicker/css/bootstrap-datepicker3.standalone.min.css') }}"/>

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/7a971a0894.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="{{  asset('datepicker/js/bootstrap-datepicker-es.js') }}"></script>
        <script src="{{ asset('mascarajs/jquery.mask.min.js') }}"></script>
        {{-- <script src="{{ asset('mascarajs/mascaras.js') }}"></script> --}}
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.js"></script>

        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>

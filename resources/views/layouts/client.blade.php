<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>


    <!-- default style -->
    <link rel="stylesheet" href="{{ asset('style/client/default.css') }}">
    <link rel="stylesheet" href="{{ asset('style/client/nav.css') }}">

    <!-- icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- basic style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.css') }}">

    <!-- custom -->
    <link rel="stylesheet" href="{{ asset('style/client/custom.css') }}">

    @yield('style')
    <style>

    </style>
</head>

<body class="hold-transition layout-top-nav dark-mode">{{-- dark-mode --}}
    <div id="global-background-dark"></div>
    <div class="wrapper">
        @if (Request()->route()->getPrefix() != '/auth')
            @include('layouts.components.client.navbar')
        @endif
        {{-- @include('layouts.components.client.sidebar') --}}
        @yield('content')

        @if (Request()->route()->getPrefix() != '/auth')
            @include('layouts.components.client.footer')
        @endif
    </div>


    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('script/client/nav.js') }}"></script>
    <script src="{{ asset('script/client/default.js') }}"></script>
    @yield('script')
</body>

</html>

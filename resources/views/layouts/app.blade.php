<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="ME">

    <title>{{ $title ?? 'Pemesanan Tiket Primajasa' }}</title>

    <link rel="stylesheet" href="{{ asset('assets/fe/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fe/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fe/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fe/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.min.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>
<!-- body -->

<body class="main-layout">

    <x-Frontend.Navbar />

    <!-- header section end -->
    @yield('content')

    <x-Frontend.Footer />

    <script src="{{ asset('assets/fe/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('assets/fe/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/fe/js/google-maps.js') }}"></script>

    <script src="{{ asset('assets/fe/assets/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('assets/fe/js/theme.js') }}"></script>
    @stack('scripts')
</body>

</html>

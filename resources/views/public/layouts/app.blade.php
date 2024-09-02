<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Public title' }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/customer/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/customer/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/customer/css/style.css') }}">
    @yield('head')
</head>

<body>
    <div class="content-wrapper">
        @include('public.layouts.includes.header')
        <!-- /header -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    @include('public.layouts.includes.footer')
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('assets/customer/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/customer/js/theme.js') }}"></script>
    <script src="{{ asset('assets/global/js/main.js') }}"></script>
    @yield('script')
</body>

</html>

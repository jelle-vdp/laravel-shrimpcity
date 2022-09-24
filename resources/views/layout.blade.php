<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('meta-title')</title>
    <meta name="description" content="@yield('meta-description')">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    @stack('extra-styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials._header')
    <main>
    @yield('content')
    </main>
    @include('partials._footer')

    @stack('extra-scripts')
</body>
</html>
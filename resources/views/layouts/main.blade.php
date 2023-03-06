<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="icon-dev.webp" type="image/x-icon">
    <title>{{ env('APP_NAME') }} | @yield('title') </title>
    @yield('cdns')
    @vite('resources/js/app.js')
</head>

<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    @yield('scripts')
</body>

</html>

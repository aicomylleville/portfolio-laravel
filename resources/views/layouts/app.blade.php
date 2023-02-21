<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/icons/logo.png') }}"></link>
    <title>Aico Mylleville</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('inc.header')

    <main>
        @yield('content')
    </main>

    @include('inc.footer')
</body>
</html>

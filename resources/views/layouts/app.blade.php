<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/navigation.css') }}"  rel="stylesheet">
</head>
<body>
    <header>
    @include('layouts.navigation')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Vladislavs Temirjovs</p>
    </footer>
</body>
</html>
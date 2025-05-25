<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Government Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <header>
        <h1>Government Tracker</h1>
        <nav>
            <a href="{{ url('/') }}">Acasă</a>
        </nav>
    </header>

    <div class="container">
        <main>
            @yield('content')
        </main>
        <aside>
            @yield('sidebar')
        </aside>
    </div>

    <footer>
        &copy; {{ date('Y') }} Ro Govt Tracker.
    </footer>

</body>

</html>
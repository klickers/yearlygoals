<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Yearly Goals</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css" />

        @yield('head')
    </head>
    <body>
        <nav>

        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
        </footer>

        @yield('scripts')
    </body>
</html>

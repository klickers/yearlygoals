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
        @yield('absolute')

        <div id="page">
            <!-- Sidebar -->
            <aside>
                <h1>Goals</h1>
            </aside>
            <!-- Primary Content -->
            <main>
                @yield('content')
            </main>
        </div>

        <footer>
        </footer>

        @yield('scripts')
    </body>
</html>

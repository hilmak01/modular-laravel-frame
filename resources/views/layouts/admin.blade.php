<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @hasSection('head')
        @yield('head')
    @else
        <title>{{config('app.name')}}</title>
    @endif
    <link rel="stylesheet" href="{{ mix('css/admin.css') }}">
    @yield('styles')
    @stack('styles')
</head>

<body>
    <header>
        {{--  @header

        @endheader  --}}
    </header>
    <main id="main" class="main" role="main">
    @hasSection('layout')
        @yield('layout')
    @else
         @yield('content')
    @endif
    </main>
    <footer>
        {{--  @footer

        @endfooter  --}}
    </footer>
    <script src="{{ mix('js/admin.js') }}"></script>
    @yield('scripts')
    @stack('scripts')
</body>
</html>

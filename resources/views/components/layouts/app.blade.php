<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ $pageTitle ?? config('app.name', '') }}</title>
        <meta name="robots" content="noindex, nofollow, noarchive" />

        @include('_partials.head')

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('head')
    </head>
    <body class="font-sans antialiased">
        <x-layouts.app.sidebar-layout>
            {{ $slot }}
        </x-layouts.app.sidebar-layout>

        @stack('body')
    </body>
</html>

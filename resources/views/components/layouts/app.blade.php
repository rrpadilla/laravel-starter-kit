<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('_partials.head', ['title' => $title ?? null])
    </head>
    <body class="font-sans antialiased">
        <x-layouts.app.sidebar-layout>
            {{ $slot }}
        </x-layouts.app.sidebar-layout>
    </body>
</html>

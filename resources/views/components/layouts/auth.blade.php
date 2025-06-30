@props([
    'pageTitle',
    'variant' => 'card',
    'title' => '',
    'description' => '',
])

@php
    $authComponent = match($variant) {
        'simple' => 'layouts.auth.simple',
        'split' => 'layouts.auth.split',
        default => 'layouts.auth.card',
    };

    $pageTitle = ($pageTitle ?? '') . ' - ' . config('app.name', '');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ $pageTitle }}</title>
        <meta name="robots" content="noindex, nofollow, noarchive" />

        @include('_partials.head')

        @vite(['resources/css/app.css', 'resources/js/auth.js'])

        @stack('head')
    </head>
    <body class="font-sans">
        <x-dynamic-component
            :component="$authComponent"
            :title="$title"
            :description="$description"
        >
            {{ $slot }}

            @isset($logo)
                <x-slot name="logo">{{ $logo }}</x-slot>
            @else
                <x-slot name="logo">
                    <a href="/" class="flex items-center gap-2 self-center font-medium">
                        <div class="flex h-9 w-9 items-center justify-center">
                            <x-app-logo-icon class="size-9 fill-current text-black dark:text-white" />
                        </div>
                    </a>
                </x-slot>
            @endisset

            @isset($footer)
                <x-slot name="footer">{{ $footer }}</x-slot>
            @else
                <x-slot name="footer">
                    <div class="text-muted-foreground *:[a]:hover:text-primary text-center text-xs text-balance *:[a]:underline *:[a]:underline-offset-4">
                        By clicking continue, you agree to our <a href="#">Terms of Service</a> <!-- -->and <a href="#">Privacy Policy</a>.
                    </div>
                </x-slot>
            @endisset
        </x-dynamic-component>

        @stack('body')
    </body>
</html>


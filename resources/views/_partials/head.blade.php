<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $title ?? config('app.name', 'Laravel') }}</title>

<!--  favicons  -->
@include('_partials.favicons')

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<style>[x-cloak] { display: none !important; }</style>

{{-- Inline script to detect system dark mode preference and apply it immediately --}}
<script>
    (function () {
        const mode = localStorage.getItem('appearance') || 'system';
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const isDark = mode === 'dark' || (mode === 'system' && prefersDark);
        document.documentElement.classList.toggle('dark', isDark);
    })();
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])

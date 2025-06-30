@props([
    'title',
    'description',
])

<div class="relative grid h-dvh flex-col items-center justify-center px-8 sm:px-0 lg:max-w-none lg:grid-cols-2 lg:px-0">
    <div class="relative hidden h-full flex-col p-10 text-white lg:flex dark:border-r dark:border-gray-800">
        <div class="absolute inset-0 bg-gray-900"></div>
            <a href="/" class="relative z-20 flex items-center text-lg font-medium">
                <x-app-logo-icon class="mr-2 h-7 fill-current text-white" />
                {{ config('app.name', '') }}
            </a>

            @php
                [$message, $author] = str(Illuminate\Foundation\Inspiring::quotes()->random())->explode('-');
            @endphp

        <div class="relative z-20 mt-auto">
            <blockquote class="space-y-2">
                <p class="text-lg">&ldquo;{{ trim($message) }}&rdquo;</p>
                <footer class="text-sm text-neutral-300">{{ trim($author) }}</footer>
            </blockquote>
        </div>
    </div>
    <div class="w-full lg:p-8">
        <div class="mx-auto flex w-full flex-col justify-center space-y-6 sm:w-[350px]">
            <a href="/" class="z-20 flex flex-col items-center gap-2 font-medium lg:hidden">
                <span class="flex h-9 w-9 items-center justify-center rounded-md">
                    <x-app-logo-icon class="size-9 fill-current text-black dark:text-white" />
                </span>
                <span class="sr-only">{{ config('app.name', '') }}</span>
            </a>
            <div class="flex flex-col items-start gap-2 text-left sm:items-center sm:text-center">
                <h1 class="text-xl font-medium">{{ $title ?? '' }}</h1>
                <p class="text-muted-foreground text-sm text-balance">{{ $description ?? '' }}</p>
            </div>
            {{ $slot }}
        </div>
    </div>
</div>

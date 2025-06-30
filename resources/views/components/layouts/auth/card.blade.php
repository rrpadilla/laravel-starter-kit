@props([
    'title',
    'description',
])

<div class="bg-muted flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
    <div class="flex w-full max-w-md flex-col gap-6">
        @isset($logo)
            {{ $logo }}
        @endif

        <div class="flex flex-col gap-6">
            <x-ui.card.card class="rounded-xl">
                <x-ui.card.card-header class="px-10 pt-8 pb-0 text-center">
                    <x-ui.card.card-title class="text-xl">{{ $title ?? '' }}</x-ui.card.card-title>
                    <x-ui.card.card-description>{{ $description ?? '' }}</x-ui.card.card-description>
                </x-ui.card.card-header>
                <x-ui.card.card-content class="px-10 py-8">{{ $slot }}</x-ui.card.card-content>
            </x-ui.card.card>
        </div>

        @isset($footer)
            <div class="text-center text-sm text-muted-foreground mt-4">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>

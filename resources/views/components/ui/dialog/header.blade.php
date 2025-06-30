@props([
    'id' => '',
    'title' => '',
    'description' => '',
])

<div data-slot="dialog-header" {{ $attributes->merge(['class' => 'flex flex-col gap-2 text-center sm:text-left']) }}>
    @if ($title)
        <h2 id="{{ $id }}-title" data-slot="dialog-title" class="text-lg leading-none font-semibold">
            {{ $title ?? '' }}
        </h2>
    @endif
    @if($description)
        <p id="{{ $id }}-description" data-slot="dialog-description" class="text-muted-foreground text-sm">{{ $description ?? '' }}</p>
    @endif
    {{ $slot }}
</div>

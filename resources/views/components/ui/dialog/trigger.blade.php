@props([
    'id' => '',
    'asChild' => false,
])

@if ($asChild)
    <div
        x-data
        x-on:click="$event.target.closest('button[disabled]') ? null : document.getElementById('{{ $id }}').showModal()"
        data-slot="dialog-trigger-wrapper"
    >
        {{ $slot }}
    </div>
@else
    <button
        data-slot="dialog-trigger"
        onclick="document.getElementById('{{ $id }}').showModal()"
        {{ $attributes->merge(['type' => 'button']) }}
    >
        {{ $slot }}
    </button>
@endif

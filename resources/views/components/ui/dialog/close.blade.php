@props([
    'class' => 'btn-outline',
])
<button
    type="button"
    data-slot="dialog-close"
    aria-label="Close dialog"
    class="{{ $class ?? 'btn-outline' }}"
    onclick="this.closest('dialog').close()"
>
    {{ $slot }}
</button>

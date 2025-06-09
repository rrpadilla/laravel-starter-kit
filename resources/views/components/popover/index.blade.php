@props([
    'justify' => 'right', // Options: left, right, center (horizontal alignment)
    'align' => 'end',  // Options: top, bottom, end (vertical alignment)
])

@php
    $x = match ($justify) {
        'left' => 'left-0 origin-left rtl:origin-right',
        'right' => 'right-0 origin-right rtl:origin-left',
    };
    $y = match ($align) {
        'top' => 'mt-1.5 top-full',
        'bottom' => 'mb-1.5 bottom-full',
    };
@endphp

<div x-data="popover()" class="relative">
    {{ $slot }}
    <div x-cloak
         data-popover-menu
        {{ $menu->attributes->class([
           $x, $y,
           'absolute z-50',
           '[:where(&)]:min-w-48 p-[.3125rem]',
           'rounded-lg shadow-xs',
           'border border-border dark:border-border',
           'bg-popover text-popover-foreground',
           'focus:outline-hidden',
        ]) }}
    >
        {{ $menu }}
    </div>
</div>


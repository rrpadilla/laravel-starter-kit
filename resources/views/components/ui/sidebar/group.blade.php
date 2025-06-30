@props(['class' => ''])

<div
    data-slot="sidebar-group"
    data-sidebar="group"
    {{ $attributes->merge(['class' => 'relative flex w-full min-w-0 flex-col p-2 ' . $class]) }}>
    {{ $slot }}
</div>

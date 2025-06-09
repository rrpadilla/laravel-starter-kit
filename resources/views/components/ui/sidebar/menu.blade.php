<!-- resources/views/components/ui/sidebar/menu.blade.php -->
@props(['class' => ''])

<ul
    data-slot="sidebar-menu"
    data-sidebar="menu"
    {{ $attributes->merge(['class' => 'flex w-full min-w-0 flex-col gap-1 ' . $class]) }}>
    {{ $slot }}
</ul>

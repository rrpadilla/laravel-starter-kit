<!-- resources/views/components/ui/sidebar/menu-sub.blade.php -->
@props(['class' => ''])

<ul
    data-slot="sidebar-menu-sub"
    data-sidebar="menu-sub"
    {{ $attributes->merge(['class' => 'border-sidebar-border mx-3.5 flex min-w-0 translate-x-px flex-col gap-1 border-l px-2.5 py-0.5 group-data-[collapsible=icon]:hidden ' . $class]) }}>
    {{ $slot }}
</ul>

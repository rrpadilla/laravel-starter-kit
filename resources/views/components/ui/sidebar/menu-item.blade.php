<!-- resources/views/components/ui/sidebar/menu-item.blade.php -->
@props(['class' => ''])

<li
    data-slot="sidebar-menu-item"
    data-sidebar="menu-item"
    {{ $attributes->merge(['class' => 'group/menu-item relative ' . $class]) }}>
    {{ $slot }}
</li>

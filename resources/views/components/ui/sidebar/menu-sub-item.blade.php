@props(['class' => ''])

<li
    data-slot="sidebar-menu-sub-item"
    data-sidebar="menu-sub-item"
    {{ $attributes->merge(['class' => 'group/menu-sub-item relative ' . $class]) }}>
    {{ $slot }}
</li>

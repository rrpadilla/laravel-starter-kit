<!-- resources/views/components/ui/sidebar/group-content.blade.php -->
@props(['class' => ''])

<div
    data-slot="sidebar-group-content"
    data-sidebar="group-content"
    {{ $attributes->merge(['class' => 'w-full text-sm ' . $class]) }}>
    {{ $slot }}
</div>

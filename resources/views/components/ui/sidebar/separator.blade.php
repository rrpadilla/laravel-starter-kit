<!-- resources/views/components/ui/sidebar/separator.blade.php -->
@props(['class' => ''])

<hr
    data-slot="sidebar-separator"
    data-sidebar="separator"
    {{ $attributes->merge(['class' => 'bg-border shrink-0 data-[orientation=horizontal]:h-px data-[orientation=horizontal]:w-full data-[orientation=vertical]:h-full data-[orientation=vertical]:w-px bg-sidebar-border mx-2 w-auto ' . $class]) }}>

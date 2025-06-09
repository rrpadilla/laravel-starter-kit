<!-- resources/views/components/ui/sidebar/provider.blade.php -->
@props(['sidebarWidth' => '16rem', 'sidebarWidthIcon' => '3rem'])

<div
    data-slot="sidebar-wrapper"
    class="group/sidebar-wrapper has-data-[variant=inset]:bg-sidebar flex min-h-svh w-full"
    style="--sidebar-width: {{ $sidebarWidth }}; --sidebar-width-icon: {{ $sidebarWidthIcon }};"
>
    {{ $slot }}
</div>

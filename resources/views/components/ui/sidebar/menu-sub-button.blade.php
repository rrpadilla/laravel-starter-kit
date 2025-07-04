@props(['size' => 'md', 'isActive' => false, 'class' => ''])

<a
    data-slot="sidebar-menu-sub-button"
    data-sidebar="menu-sub-button"
    data-size="{{ $size }}"
    data-active="{{ $isActive ? 'true' : 'false' }}"
    {{ $attributes->merge(['class' => 'text-sidebar-foreground ring-sidebar-ring hover:bg-sidebar-accent hover:text-sidebar-accent-foreground active:bg-sidebar-accent active:text-sidebar-accent-foreground [&>svg]:text-sidebar-accent-foreground flex h-7 min-w-0 -translate-x-px items-center gap-2 overflow-hidden rounded-md px-2 outline-hidden focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 data-[active=true]:bg-sidebar-accent data-[active=true]:text-sidebar-accent-foreground ' . ($size === 'sm' ? 'text-xs' : 'text-sm') . ' group-data-[collapsible=icon]:hidden ' . $class]) }}>
    {{ $slot }}
</a>

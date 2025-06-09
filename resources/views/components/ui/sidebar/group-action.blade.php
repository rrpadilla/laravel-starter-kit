<!-- resources/views/components/ui/sidebar/group-action.blade.php -->
@props(['class' => ''])

<button
    data-slot="sidebar-group-action"
    data-sidebar="group-action"
    {{ $attributes->merge(['class' => 'text-sidebar-foreground ring-sidebar-ring hover:bg-sidebar-accent hover:text-sidebar-accent-foreground absolute top-3.5 right-3 flex aspect-square w-5 items-center justify-center rounded-md p-0 outline-hidden transition-transform focus-visible:ring-2 [&>svg]:size-4 [&>svg]:shrink-0 after:absolute after:-inset-2 md:after:hidden group-data-[collapsible=icon]:hidden ' . $class]) }}>
    {{ $slot }}
</button>

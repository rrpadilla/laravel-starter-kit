<!-- resources/views/components/ui/sidebar/trigger.blade.php -->
@props(['class' => 'size-7', 'iconClass' => 'size-5'])

<x-ui.button
    data-sidebar="trigger"
    data-slot="sidebar-trigger"
    variant="ghost"
    size="icon"
    {{ $attributes->merge(['class' => 'size-7 ' . $class]) }}
    x-data
    @click="$store.sidebar.isMobile ? $store.sidebar.toggleMobile() : $store.sidebar.toggle()"
>
    <template x-if="$store.sidebar.isOpen">
        @svg('lucide-panel-left-close', "lucide lucide-panel-left-close $iconClass")
    </template>
    <template x-if="!$store.sidebar.isOpen">
        @svg('lucide-panel-left-open', "lucide lucide-panel-left-open $iconClass")
    </template>
    <span class="sr-only">Toggle Sidebar</span>
</x-ui.button>

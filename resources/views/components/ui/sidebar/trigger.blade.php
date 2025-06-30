<button
    {{ $attributes->merge(['class' => 'btn-ghost']) }}
    class="btn-ghost"
    data-sidebar="trigger"
    data-slot="sidebar-trigger"
    x-data
    @click="$store.sidebar.isMobile ? $store.sidebar.toggleMobile() : $store.sidebar.toggle()"
>
    <template x-if="$store.sidebar.isOpen">
        @svg('lucide-panel-left-close', "lucide lucide-panel-left-close")
    </template>
    <template x-if="!$store.sidebar.isOpen">
        @svg('lucide-panel-left-open', "lucide lucide-panel-left-open")
    </template>
    <span class="sr-only">Toggle Sidebar</span>
</button>

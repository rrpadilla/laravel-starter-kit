<x-ui.sidebar.provider>
    <x-app-sidebar />
    <x-ui.sidebar.inset>
        <x-app-header />
        {{ $slot }}
    </x-ui.sidebar.inset>
</x-ui.sidebar.provider>

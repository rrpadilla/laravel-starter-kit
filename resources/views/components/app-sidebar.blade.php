<!-- resources/views/components/app-sidebar.blade.php -->
<x-ui.sidebar :variant="'sidebar'" :collapsible="'offcanvas'">
    <x-ui.sidebar.header>
        <div class="flex items-center">
            <span class="text-lg font-semibold">Application</span>
        </div>
    </x-ui.sidebar.header>

    <x-ui.sidebar.content>
        <x-ui.sidebar.group>
            <x-ui.sidebar.group-label>Navigation</x-ui.sidebar.group-label>
            <x-ui.sidebar.group-content>
                <x-ui.sidebar.menu>
                    <x-ui.sidebar.menu-item>
                        <x-ui.sidebar.menu-button :isActive="request()->routeIs('dashboard')" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard">
                                <rect width="7" height="9" x="3" y="3" rx="1" />
                                <rect width="7" height="5" x="14" y="3" rx="1" />
                                <rect width="7" height="9" x="14" y="12" rx="1" />
                                <rect width="7" height="5" x="3" y="16" rx="1" />
                            </svg>
                            <span>Dashboard</span>
                        </x-ui.sidebar.menu-button>
                    </x-ui.sidebar.menu-item>

                    <x-ui.sidebar.menu-item>
                        <x-ui.sidebar.menu-button :as="'a'" :isActive="request()->routeIs('settings')" href="/settings">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings">
                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            <span>Settings</span>
                        </x-ui.sidebar.menu-button>
                    </x-ui.sidebar.menu-item>
                </x-ui.sidebar.menu>
            </x-ui.sidebar.group-content>
        </x-ui.sidebar.group>

        <x-ui.sidebar.separator />

        <x-ui.sidebar.group>
            <x-ui.sidebar.group-label>Navigation</x-ui.sidebar.group-label>
            <x-ui.sidebar.group-content>
                <x-ui.sidebar.menu>
                    <x-ui.sidebar.menu-item>
                        <x-ui.sidebar.menu-button :isActive="request()->routeIs('dashboard')" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard">
                                <rect width="7" height="9" x="3" y="3" rx="1" />
                                <rect width="7" height="5" x="14" y="3" rx="1" />
                                <rect width="7" height="9" x="14" y="12" rx="1" />
                                <rect width="7" height="5" x="3" y="16" rx="1" />
                            </svg>
                            <span>Dashboard</span>
                        </x-ui.sidebar.menu-button>
                    </x-ui.sidebar.menu-item>

                    <x-ui.sidebar.menu-item>
                        <x-ui.sidebar.menu-button :as="'a'" :isActive="request()->routeIs('settings')" href="/settings">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings">
                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            <span>Settings</span>
                        </x-ui.sidebar.menu-button>
                    </x-ui.sidebar.menu-item>
                </x-ui.sidebar.menu>
            </x-ui.sidebar.group-content>
        </x-ui.sidebar.group>
    </x-ui.sidebar.content>

    <x-ui.sidebar.footer>
        <div class="flex items-center justify-between">
            <span class="text-xs text-muted-foreground">© {{ date('Y') }} Company</span>
            <a href="#" class="text-xs text-muted-foreground hover:text-foreground">Help</a>
        </div>
    </x-ui.sidebar.footer>
</x-ui.sidebar>

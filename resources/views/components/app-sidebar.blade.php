<x-ui.sidebar variant="sidebar" collapsible="offcanvas">
    <x-ui.sidebar.header>
        <x-ui.sidebar.menu>
            <x-ui.sidebar.menu-item>
                <x-ui.sidebar.menu-button class="cursor-pointer" size="lg">
                    <div class="bg-primary text-primary-foreground flex aspect-square size-8 items-center justify-center rounded-md">
                        <x-app-logo-icon class="size-5 fill-current text-white dark:text-black" />
                    </div>
                    <div class="grid flex-1 text-left text-sm leading-tight">
                        <span class="truncate font-medium">Laravel Starter Kit</span>
                    </div>
                </x-ui.sidebar.menu-button>
            </x-ui.sidebar.menu-item>
        </x-ui.sidebar.menu>
    </x-ui.sidebar.header>

    <x-ui.sidebar.content>
        <x-ui.sidebar.group>
            <x-ui.sidebar.group-label>Platform</x-ui.sidebar.group-label>
            <x-ui.sidebar.group-content>
                <x-ui.sidebar.menu>
                    <x-ui.sidebar.menu-item>
                        <x-ui.sidebar.menu-link :isActive="request()->routeIs('dashboard')" href="{{ route('dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard">
                                <rect width="7" height="9" x="3" y="3" rx="1" />
                                <rect width="7" height="5" x="14" y="3" rx="1" />
                                <rect width="7" height="9" x="14" y="12" rx="1" />
                                <rect width="7" height="5" x="3" y="16" rx="1" />
                            </svg>
                            <span>{{ __('Dashboard') }}</span>
                        </x-ui.sidebar.menu-link>
                    </x-ui.sidebar.menu-item>

                    <x-ui.sidebar.menu-item>
                        <x-ui.sidebar.menu-link :isActive="request()->routeIs('settings')" href="/settings">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings">
                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            <span>{{ __('Settings') }}</span>
                        </x-ui.sidebar.menu-link>
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
                        <x-ui.sidebar.menu-link href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard">
                                <rect width="7" height="9" x="3" y="3" rx="1" />
                                <rect width="7" height="5" x="14" y="3" rx="1" />
                                <rect width="7" height="9" x="14" y="12" rx="1" />
                                <rect width="7" height="5" x="3" y="16" rx="1" />
                            </svg>
                            <span>Link 1</span>
                        </x-ui.sidebar.menu-link>
                    </x-ui.sidebar.menu-item>

                    <x-ui.sidebar.menu-item>
                        <x-ui.sidebar.menu-link href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings">
                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            <span>Link 2</span>
                        </x-ui.sidebar.menu-link>
                    </x-ui.sidebar.menu-item>
                </x-ui.sidebar.menu>
            </x-ui.sidebar.group-content>
        </x-ui.sidebar.group>

        <x-ui.sidebar.group class="mt-auto">
            <x-ui.sidebar.group-content>
                <x-ui.sidebar.menu>
                    <x-ui.sidebar.menu-item>
                        <x-ui.sidebar.menu-link size="sm" as="a" href="https://github.com/rrpadilla/laravel-starter-kit" target="_blank" rel="noopener noreferrer">
                            @svg('lucide-git-fork', 'lucide lucide-git-fork')
                            <span>Repository</span>
                        </x-ui.sidebar.menu-link>
                    </x-ui.sidebar.menu-item>

                    <x-ui.sidebar.menu-item>
                        <x-ui.sidebar.menu-link size="sm" as="a" href="https://laravel.com/docs/starter-kits" target="_blank" rel="noopener noreferrer">
                            @svg('lucide-book-open', 'lucide lucide-book-open')
                            <span>Documentation</span>
                        </x-ui.sidebar.menu-link>
                    </x-ui.sidebar.menu-item>
                </x-ui.sidebar.menu>
            </x-ui.sidebar.group-content>
        </x-ui.sidebar.group>
    </x-ui.sidebar.content>

    <x-ui.sidebar.footer>
        <x-ui.sidebar.menu>
            <x-ui.sidebar.menu-item>
                <!-- dropdown user menu -->
                <x-ui.dropdown-menu id="dropdown-menu--user-menu--sidebar" data-side="right" data-align="end" class="w-full">
                    <x-slot:trigger class="btn-ghost h-12 justify-start px-2 w-full">
                        <span class="size-8 shrink-0 bg-primary text-primary-foreground flex items-center justify-center rounded-full">
                            {{ auth()->user()->initials() }}
                        </span>
                        <span class="hidden lg:flex lg:items-center">
                            <span class="text-sm font-semibold leading-6" aria-hidden="true">
                                {{ Auth::user()->name }}
                            </span>
                        </span>
                        @svg('lucide-chevrons-up-down', 'lucide lucide-chevrons-up-down text-muted-foreground ml-auto')
                    </x-slot:trigger>
                    <x-slot:menu class="w-56">
                        @include('_partials.user-menu')
                    </x-slot:menu>
                </x-ui.dropdown-menu>
            </x-ui.sidebar.menu-item>
        </x-ui.sidebar.menu>
    </x-ui.sidebar.footer>
</x-ui.sidebar>

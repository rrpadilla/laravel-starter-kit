<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Scripts -->
        <script>
            /*function isDark() {
                return localStorage.getItem('darkMode') === 'dark' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches);
            }

            if (isDark()) {
                document.documentElement.classList.add('dark');
            }

            document.addEventListener('alpine:init', () => {
                Alpine.store('darkMode', {
                    isDark: isDark(),
                    toggle() {
                        this.isDark = document.documentElement.classList.toggle('dark');
                        localStorage.setItem('darkMode', this.isDark ? 'dark' : 'light');
                    }
                });
            });*/
        </script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <div class="sidebar" data-uninitialized data-side="left" aria-hidden="false" x-data="sidebar($persist(true).as('sidebarIsOpen'))" x-bind="$main">
            <nav aria-label="Sidebar navigation">
                <header>
                    <a href="/" class="btn-ghost p-2 h-12 w-full justify-start">
                        <div class="bg-sidebar-primary text-sidebar-primary-foreground flex aspect-square size-8 items-center justify-center rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="h-4 w-4"><rect width="256" height="256" fill="none"></rect><line x1="208" y1="128" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></line><line x1="192" y1="40" x2="40" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></line></svg>
                        </div>
                        <div class="grid flex-1 text-left text-sm leading-tight">
                            <span class="truncate font-medium">Basecoat</span>
                            <span class="truncate text-xs">v0.1.0</span>
                        </div>
                    </a>
                </header>

                <section class="scrollbar">
                    <div role="group" aria-labelledby="group-label-content-1">
                        <h3 id="group-label-content-1">Getting started</h3>

                        <ul>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 11 2-2-2-2" />
                                        <path d="M11 13h4" />
                                        <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                                    </svg>
                                    <span>Playground</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 8V4H8" />
                                        <rect width="16" height="12" x="4" y="8" rx="2" />
                                        <path d="M2 14h2" />
                                        <path d="M20 14h2" />
                                        <path d="M15 13v2" />
                                        <path d="M9 13v2" />
                                    </svg>
                                    <span>Models</span>
                                </a>
                            </li>

                            <li>
                                <details id="submenu-content-1-3">
                                    <summary aria-controls="submenu-content-1-3-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                        Settings
                                    </summary>
                                    <ul id="submenu-content-1-3-content">
                                        <li>
                                            <a href="#">
                                                <span>General</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span>Team</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span>Billing</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span>Limits</span>
                                            </a>
                                        </li>
                                    </ul>
                                </details>
                            </li>
                        </ul>
                    </div>
                </section>

                <footer>
                    <div class="popover" x-data="popover" @click.away="open = false">
                        <button type="button" aria-haspopup="menu" aria-expanded="false" x-bind="$trigger" class="btn-ghost p-2 h-12 w-full flex items-center justify-start">
                            <span class="shrink-0 size-8 bg-gray-200 rounded-sm overflow-hidden dark:bg-gray-700">
                                <span class="w-full h-full flex items-center justify-center text-sm">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>
                            <div class="grid flex-1 text-left text-sm leading-tight">
                                <span class="truncate font-medium">{{ auth()->user()->name }}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"></path><path d="m7 9 5-5 5 5"></path></svg>
                        </button>

                        <div data-popover="" aria-hidden="true" x-bind="$content" data-side="right" data-align="end" class="w-80" x-init="
                          if (window.innerWidth < 768) {
                            $el.setAttribute('data-side', 'top');
                            $el.setAttribute('data-align', 'start');
                            $el.classList.add('w-full');
                          }
                        ">
                            <div class="">
                                <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                    <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                        <span class="flex h-full w-full items-center justify-center rounded-lg bg-gray-200 text-black dark:bg-gray-700 dark:text-white">
                                            {{ auth()->user()->initials() }}
                                        </span>
                                    </span>

                                    <div class="grid flex-1 text-left text-sm leading-tight">
                                        <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                        <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                                <x-popover.separator />
                                <x-popover.item href="/settings/profile">
                                    <x-slot:before>
                                        <svg aria-hidden="true" width="20" height="20" class="shrink-0 mr-2 text-gray-400 group-hover:text-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><path d="M232,120H215.63a87.27,87.27,0,0,0-7.74-28.88l14.18-8.19a8,8,0,0,0-8-13.86l-14.2,8.2a88.78,88.78,0,0,0-21.14-21.14l8.2-14.2a8,8,0,0,0-13.86-8l-8.19,14.18A87.27,87.27,0,0,0,136,40.37V24a8,8,0,0,0-16,0V40.37a87.27,87.27,0,0,0-28.88,7.74L82.93,33.93a8,8,0,0,0-13.86,8l8.2,14.2A88.78,88.78,0,0,0,56.13,77.27l-14.2-8.2a8,8,0,0,0-8,13.86l14.18,8.19A87.27,87.27,0,0,0,40.37,120H24a8,8,0,0,0,0,16H40.37a87.27,87.27,0,0,0,7.74,28.88l-14.18,8.19a8,8,0,0,0,4,14.93,7.92,7.92,0,0,0,4-1.07l14.2-8.2a88.78,88.78,0,0,0,21.14,21.14l-8.2,14.2a8,8,0,0,0,13.86,8l8.19-14.18A87.27,87.27,0,0,0,120,215.63V232a8,8,0,0,0,16,0V215.63a87.27,87.27,0,0,0,28.88-7.74l8.19,14.18a8,8,0,0,0,13.86-8l-8.2-14.2a88.78,88.78,0,0,0,21.14-21.14l14.2,8.2A8,8,0,0,0,225,184a8,8,0,0,0-2.92-10.93l-14.18-8.19A87.27,87.27,0,0,0,215.63,136H232a8,8,0,0,0,0-16ZM128,56a72.08,72.08,0,0,1,71.54,64H132.62L99.16,62.05A71.58,71.58,0,0,1,128,56ZM56,128A72,72,0,0,1,85.31,70.06L118.76,128,85.31,185.94A72,72,0,0,1,56,128Zm72,72A71.58,71.58,0,0,1,99.16,194L132.62,136h66.92A72.08,72.08,0,0,1,128,200Z"></path></svg>
                                    </x-slot:before>
                                    {{ __('Settings') }}
                                </x-popover.item>
                                <x-popover.separator />
                                <x-form method="post" action="{{ route('logout') }}" class="w-full flex">
                                    <x-popover.item>
                                        <x-slot:before>
                                            <svg aria-hidden="true" width="20" height="20" class="shrink-0 mr-2 text-gray-400 group-hover:text-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><path d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z"></path></svg>
                                        </x-slot:before>
                                        {{ __('Log Out') }}
                                    </x-popover.item>
                                </x-form>
                            </div>
                        </div>
                    </div>
                </footer>
            </nav>
        </div>

        <main>
            <header class="bg-background sticky inset-x-0 top-0 isolate flex shrink-0 items-center gap-2 border-b z-10">
                <div class="flex h-14 w-full items-center gap-2 px-4">
                    <button type="button" class="btn-sm-icon-ghost mr-auto size-7 -ml-1.5"
                        aria-label="Hide sidebar" data-tooltip="Show sidebar"
                        x-bind:data-tooltip="sidebarOpen ? 'Hide sidebar' : 'Show sidebar'"
                        data-side="bottom" data-align="start"
                        x-data="{ sidebarOpen: $persist(true).as('sidebarIsOpen') }"
                        x-on:click="sidebarOpen = !sidebarOpen; $dispatch('sidebar:toggle');"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M9 3v18"></path></svg>
                    </button>
                    <button type="button" :aria-label="$store.darkMode.isDark ? 'Switch to light mode' : 'Switch to dark mode'" :data-tooltip="$store.darkMode.isDark ? 'Light mode' : 'Dark mode'" data-side="bottom" class="btn-icon-outline size-8" x-init="" @click="$store.darkMode.toggle()" aria-label="Switch to dark mode" data-tooltip="Dark mode">
                        <span x-show="$store.darkMode.isDark" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2"></path><path d="M12 20v2"></path><path d="m4.93 4.93 1.41 1.41"></path><path d="m17.66 17.66 1.41 1.41"></path><path d="M2 12h2"></path><path d="M20 12h2"></path><path d="m6.34 17.66-1.41 1.41"></path><path d="m19.07 4.93-1.41 1.41"></path></svg></span>
                        <span x-show="!$store.darkMode.isDark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></svg></span>
                    </button>
                    <a href="https://github.com/hunvreus/basecoat" class="btn-icon size-8" target="_blank" rel="noopener noreferrer" data-tooltip="GitHub repository" data-side="bottom" data-align="end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
                    </a>
                </div>
            </header>
            <div class="flex flex-1 flex-col gap-4 p-4">
                <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                    <div class="bg-muted/50 aspect-video rounded-xl"></div>
                    <div class="bg-muted/50 aspect-video rounded-xl"></div>
                    <div class="bg-muted/50 aspect-video rounded-xl"></div>
                </div>
                <div class="bg-muted/50 min-h-[100vh] flex-1 rounded-xl md:min-h-min"></div>
            </div>
        </main>

    </body>
</html>

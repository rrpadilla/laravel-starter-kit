<!-- resources/views/components/app-header.blade.php -->
<header class="bg-background sticky top-0 z-50 flex h-14 shrink-0 items-center gap-2 border-b px-4">
    <div class="flex flex-1 items-center gap-2 px-3">
        <x-ui.sidebar.trigger class="-ml-1" icon-class="size-5" />
        <!-- Customize header
        <div class="h-4 w-px bg-border mr-2"></div>
        <nav aria-label="breadcrumb">
            <ol class="flex items-center gap-1.5 text-sm">
                <li class="hidden md:block">
                    <a href="#" class="text-muted-foreground hover:text-foreground transition-colors">
                        Building Your Application
                    </a>
                </li>
                <li class="hidden md:block text-muted-foreground">/</li>
                <li>
                    <span class="font-medium">Dashboard</span>
                </li>
            </ol>
        </nav>
        -->
    </div>
    <div class="ml-auto px-3">
        <div class="flex items-center gap-2 text-sm">
            <x-ui.button variant="ghost" size="icon" class="size-7 z-10"
                x-data
                x-on:click="$store.theme.toggle()"
                x-bind:aria-label="$store.theme.isDark ? 'Switch to light mode' : 'Switch to dark mode'"
                x-bind:data-tooltip="$store.theme.isDark ? 'Light mode' : 'Dark mode'"
                data-side="bottom"
                data-align="center"
            >
                <!--
                <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M12 3l0 18"></path><path d="M12 9l4.65 -4.65"></path><path d="M12 14.3l7.37 -7.37"></path><path d="M12 19.6l8.85 -8.85"></path></svg>
                -->

                <span x-show="$store.theme.isDark" x-cloak>
                    @svg('lucide-sun', 'lucide lucide-sun size-5')
                </span>
                <span x-show="!$store.theme.isDark" x-cloak>
                    @svg('lucide-moon', 'lucide lucide-moon size-5')
                </span>
            </x-ui.button>

            <x-popover align="top" justify="right">
                <button
                    data-popover-trigger
                    type="button"
                    class="w-full group flex items-center rounded-lg p-1 hover:bg-accent/50">
                    <span class="shrink-0 size-8 rounded-sm overflow-hidden bg-muted text-muted-foreground">
                        <span class="w-full h-full flex items-center justify-center text-sm">
                            {{ auth()->user()->initials() }}
                        </span>
                    </span>
                    <span class="shrink-0 ml-auto size-8 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"></path><path d="m7 9 5-5 5 5"></path></svg>
                    </span>
                </button>
                <x-slot:menu class="w-max">
                    <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span class="flex h-full w-full items-center justify-center rounded-lg bg-muted text-muted-foreground">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>
                        <div class="grid flex-1 text-left text-sm leading-tight">
                            <span class="truncate font-semibold text-foreground">{{ auth()->user()->name }}</span>
                            <span class="truncate text-xs text-muted-foreground">{{ auth()->user()->email }}</span>
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
                </x-slot:menu>
            </x-popover>
        </div>
    </div>
</header>

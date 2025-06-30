<header class="bg-background sticky top-0 z-50 flex h-14 shrink-0 items-center gap-2 border-b px-4">
    <x-ui.sidebar.trigger />

    <!-- Separator -->
    <div class="h-4 w-px bg-border mr-2"></div>

    <div class="flex w-full justify-between">
        <div class="flex items-center">
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
        </div>

        <div class="ml-auto">
            <!-- dropdown user menu -->
            <x-ui.dropdown-menu id="dropdown-menu--user-menu--header" data-side="bottom" data-align="end">
                <x-slot:trigger class="btn-ghost h-12 justify-start px-2">
                    <span class="size-8 shrink-0 bg-primary text-primary-foreground flex items-center justify-center rounded-full">
                        {{ auth()->user()->initials() }}
                    </span>
                    @if (false)
                        <span class="hidden lg:flex lg:items-center">
                            <span class="text-sm font-semibold leading-6" aria-hidden="true">
                                {{ Auth::user()->name }}
                            </span>
                        </span>
                        @svg('lucide-chevrons-up-down', 'lucide lucide-chevrons-up-down text-muted-foreground ml-auto')
                    @endif
                </x-slot:trigger>
                <x-slot:menu class="w-56">
                    @include('_partials.user-menu')
                </x-slot:menu>
            </x-ui.dropdown-menu>
        </div>
    </div>
</header>

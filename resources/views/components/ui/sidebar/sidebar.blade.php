@props([
    'sidebarWidthMobile' => '18rem',
    'side' => 'left', // 'left' or 'right'
    'variant' => 'sidebar', // 'sidebar', 'floating', 'inset'
    'collapsible' => 'offcanvas', // 'offcanvas', 'icon', 'none'
])

<div
    x-data
    x-init="$watch('$store.sidebar.openMobile', val => document.body.classList.toggle('overflow-hidden', val))"
>
    @if ($collapsible === 'none')
        {{-- Static Sidebar when collapsible = none --}}
        <div
            data-slot="sidebar"
            class="bg-sidebar text-sidebar-foreground flex h-full w-[--sidebar-width] flex-col"
        >
            {{ $slot }}
        </div>
    @else
        {{-- Mobile Sheet Sidebar --}}
        <div
            x-data="{}"
            x-cloak
            x-show="$store.sidebar.openMobile"
            x-on:keydown.window.escape="$store.sidebar.openMobile = false"
            x-on:click.self="$store.sidebar.openMobile = false"
            data-side="{{ $side }}"
            class="md:hidden"
        >
            <div data-state="open" data-slot="sheet-overlay"
                 class="data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 fixed inset-0 z-50 bg-black/50"
                 style="pointer-events: auto;" data-aria-hidden="true" aria-hidden="true"
                 x-on:click="$store.sidebar.openMobile = false"
            >
            </div>

            <div
                data-state="open"
                data-sidebar="sidebar"
                data-slot="sidebar"
                data-mobile="true"
                class="data-[state=open]:animate-in data-[state=closed]:animate-out fixed z-50 flex flex-col gap-4 shadow-lg transition ease-in-out data-[state=closed]:duration-300 data-[state=open]:duration-500 data-[state=closed]:slide-out-to-left data-[state=open]:slide-in-from-left inset-y-0 left-0 h-full border-r sm:max-w-sm bg-sidebar text-sidebar-foreground w-(--sidebar-width-mobile) p-0 [&>button]:hidden"
                style="--sidebar-width-mobile: {{ $sidebarWidthMobile }}; pointer-events: auto;"
            >
                <div
                    class="absolute right-0 top-0 flex justify-center transition-none"
                >
                    <button
                        data-sidebar="trigger"
                        data-slot="sidebar-trigger"
                        size="icon"
                        class="btn-ghost size-7"
                        x-on:click="$store.sidebar.openMobile = false"
                    >
                        @svg('lucide-x', 'w-5 h-5 lucide lucide-x-circle')
                        <span class="sr-only">Close Sidebar</span>
                    </button>
                </div>
                <div class="sr-only">
                    <h2>Sidebar</h2>
                    <p>Displays the mobile sidebar.</p>
                </div>
                <div class="flex h-full w-full flex-col">
                    {{ $mobile ?? $slot }}
                </div>
            </div>
        </div>

        {{-- Desktop Sidebar --}}
        <div
            x-cloak
            class="group peer text-sidebar-foreground hidden md:block"
            x-bind:data-state="$store.sidebar.isOpen ? 'expanded' : 'collapsed'"
            x-bind:data-collapsible="!$store.sidebar.isOpen ? '{{ $collapsible }}' : ''"
            data-variant="{{ $variant }}"
            data-side="{{ $side }}"
            data-slot="sidebar"
            x-data="{ side: '{{ $side }}', variant: '{{ $variant }}', collapsible: '{{ $collapsible }}' }"
        >
            {{-- Gap on the left/right of sidebar --}}
            <div
                data-slot="sidebar-gap"
                class="relative w-(--sidebar-width) bg-transparent transition-[width] duration-200 ease-linear group-data-[collapsible=offcanvas]:w-0 group-data-[side=right]:rotate-180"
                x-bind:class="variant === 'floating' || variant === 'inset' ? 'group-data-[collapsible=icon]:w-[calc(var(--sidebar-width-icon)+(--spacing(4)))]' : 'group-data-[collapsible=icon]:w-(--sidebar-width-icon)'"
            ></div>

            {{-- Sidebar Container --}}
            <div
                data-slot="sidebar-container"
                class="fixed inset-y-0 z-10 hidden h-svh w-(--sidebar-width) transition-[left,right,width] duration-200 ease-linear md:flex"
                x-bind:class="{
                    'left-0 group-data-[collapsible=offcanvas]:left-[calc(var(--sidebar-width)*-1)]': '{{ $side }}' === 'left',
                    'right-0 group-data-[collapsible=offcanvas]:right-[calc(var(--sidebar-width)*-1)]': '{{ $side }}' === 'right',

                    // Adjust the padding for floating and inset variants.
                    'p-2 group-data-[collapsible=icon]:w-[calc(var(--sidebar-width-icon)+(--spacing(4))+2px)]' : '{{ $variant }}' !== 'sidebar',
                    'group-data-[collapsible=icon]:w-(--sidebar-width-icon) group-data-[side=left]:border-r group-data-[side=right]:border-l' : '{{ $variant }}' === 'sidebar',
                }"
            >
                <div
                    data-sidebar="sidebar"
                    data-slot="sidebar-inner"
                    class="bg-sidebar group-data-[variant=floating]:border-sidebar-border flex h-full w-full flex-col group-data-[variant=floating]:rounded-lg group-data-[variant=floating]:border group-data-[variant=floating]:shadow-sm"
                >
                    {{ $slot }}
                </div>
            </div>
        </div>
    @endif
</div>

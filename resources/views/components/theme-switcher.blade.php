<button size="icon" class="btn-ghost size-7 z-10"
    x-data
    x-init="$store.theme.init()"
    x-on:click="$store.theme.toggle()"
    x-bind:aria-label="$store.theme.isDark ? 'Switch to light mode' : 'Switch to dark mode'"
    x-bind:data-tooltip="$store.theme.isDark ? 'Light mode' : 'Dark mode'"
    data-side="bottom"
    data-align="center"
>
    <span x-show="$store.theme.isDark" x-cloak>
        @svg('lucide-sun', 'lucide lucide-sun')
    </span>
    <span x-show="!$store.theme.isDark" x-cloak>
        @svg('lucide-moon', 'lucide lucide-moon')
    </span>
</button>

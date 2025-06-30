<div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
    <span class="size-8 shrink-0 bg-primary text-primary-foreground flex items-center justify-center rounded-full">
        {{ auth()->user()->initials() }}
    </span>
    <div class="grid flex-1 text-left text-sm leading-tight">
        <span class="truncate font-semibold text-foreground">{{ auth()->user()->name }}</span>
        <span class="truncate text-xs text-muted-foreground">{{ auth()->user()->email }}</span>
    </div>
</div>
<hr role="separator" />
<a role="menuitem" href="{{ route('settings.profile.edit') }}" class="cursor-pointer">
    @svg('lucide-user', 'lucide lucide-user')
    {{ __('Profile') }}
</a>
<a role="menuitem" href="#" class="cursor-pointer">
    @svg('lucide-credit-card', 'lucide lucide-credit-card')
    {{ __('Billing') }}
</a>
<a role="menuitem" href="#" class="cursor-pointer">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
        <circle cx="12" cy="12" r="3" />
    </svg>
    {{ __('Settings') }}
</a>
<hr role="separator" />
<div role="group" aria-labelledby="appearance-theme-switcher-options"
     x-data
>
    <div role="heading" id="appearance-theme-switcher-options">Appearance</div>
    <div role="menuitemradio" aria-checked="true" x-bind:aria-checked="!$store.theme.isDark" class="group" x-on:click="$store.theme.set('light')">
        <div class="size-4 flex items-center justify-center">
            <div class="size-2 rounded-full bg-foreground invisible group-aria-checked:visible" aria-hidden="true" focusable="false"></div>
        </div>
        {{ __('Light') }}
        <span class="text-muted-foreground ml-auto text-xs tracking-widest">
            @svg('lucide-sun', 'lucide lucide-sun')
        </span>
    </div>
    <div role="menuitemradio" aria-checked="false" x-bind:aria-checked="$store.theme.isDark" class="group" x-on:click="$store.theme.set('dark')">
        <div class="size-4 flex items-center justify-center">
            <div class="size-2 rounded-full bg-foreground invisible group-aria-checked:visible" aria-hidden="true" focusable="false"></div>
        </div>
        {{ __('Dark') }}
        <span class="text-muted-foreground ml-auto text-xs tracking-widest">
            @svg('lucide-moon', 'lucide lucide-moon')
        </span>
    </div>
</div>
<hr role="separator" />
<div>
    <x-form method="post" action="{{ route('logout') }}">
        <button type="submit" role="menuitem" class="cursor-pointer">
            @svg('lucide-log-out', 'lucide lucide-log-out')
            {{ __('Log out') }}
        </button>
    </x-form>
</div>

<x-layouts.auth
    :page-title="__('Register')"
    :title="__('Create an account')"
    :description="__('Enter your details below to create your account')"
>
    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form class="form flex flex-col gap-6" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="grid gap-6">
            <div class="grid gap-2">
                <label for="name">{{ __('Name') }}</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    required
                    autofocus
                    tabindex="1"
                    autocomplete="name"
                    placeholder="{{ __('Full name') }}"
                    value="{{ old('name') }}"
                    @error('name') aria-invalid="true" @enderror
                />
                <x-input-error-for for="name" />
            </div>

            <div class="grid gap-2">
                <label for="email">{{ __('Email address') }}</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    required
                    tabindex="2"
                    autocomplete="email"
                    placeholder="email@example.com"
                    value="{{ old('email') }}"
                    @error('email') aria-invalid="true" @enderror
                />
                <x-input-error-for for="email" />
            </div>

            <div class="grid gap-2">
                <label for="password">{{ __('Password') }}</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    tabindex="3"
                    autocomplete="new-password"
                    placeholder="{{ __('Password') }}"
                    @error('password') aria-invalid="true" @enderror
                />
                <x-input-error-for for="password" />
            </div>

            <div class="grid gap-2">
                <label for="password_confirmation">{{ __('Confirm password') }}</label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    tabindex="4"
                    autocomplete="new-password"
                    placeholder="{{ __('Confirm password') }}"
                    @error('password_confirmation') aria-invalid="true" @enderror
                />
                <x-input-error-for for="password_confirmation" />
            </div>

            <button type="submit" class="btn mt-2 w-full" tabindex="5">
                {{ __('Create account') }}
            </button>
        </div>

        <div class="text-muted-foreground text-center text-sm">
            {{ __('Already have an account?') }}
            <x-text-link href="{{ route('login') }}" tabindex="6">
                {{ __('Log in') }}
            </x-text-link>
        </div>
    </form>

</x-layouts.auth>

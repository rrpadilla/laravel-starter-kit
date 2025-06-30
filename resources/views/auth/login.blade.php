<x-layouts.auth
    :page-title="__('Log in')"
    :title="__('Log in to your account')"
    :description="__('Enter your email and password below to log in')"
>
    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form class="form flex flex-col gap-6" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="grid gap-6">
            <!-- Email Address -->
            <div class="grid gap-2">
                <label for="email">{{ __('Email address') }}</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    required
                    autofocus
                    tabindex="1"
                    autocomplete="email"
                    value="{{ old('email') }}"
                    @error('email') aria-invalid="true" @enderror
                />
                <x-input-error-for for="email" />
            </div>

            <!-- Password -->
            <div class="grid gap-2">
                <div class="flex items-center">
                    <label for="password">{{ __('Password') }}</label>
                    <x-text-link href="{{ route('password.request') }}" class="ml-auto text-sm" tabindex="5">
                        {{ __('Forgot password?') }}
                    </x-text-link>
                </div>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    tabindex="2"
                    autocomplete="current-password"
                    @error('password') aria-invalid="true" @enderror
                />
                <x-input-error-for for="password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center space-x-3">
                <label class="label gap-3">
                    <input type="checkbox" id="remember" name="remember" tabindex="3">
                    {{ __('Remember me') }}
                </label>
            </div>

            <button class="btn mt-4 w-full" tabindex="4">
                {{ __('Log in') }}
            </button>
        </div>

        <div class="text-muted-foreground text-center text-sm">
            {{ __("Don't have an account?") }}
            <x-text-link href="{{ route('register') }}" tabindex="6">
                {{ __('Sign up')  }}
            </x-text-link>
        </div>
    </form>
</x-layouts.auth>

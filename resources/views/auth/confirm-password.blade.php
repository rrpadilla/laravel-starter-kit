<x-layouts.auth
    :page-title="__('Confirm password')"
    :title="__('Confirm your password')"
    :description="__('This is a secure area of the application. Please confirm your password before continuing.')"
>
    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form class="form" method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="space-y-6">
            <div class="grid gap-2">
                <label for="password">{{ __('Password') }}</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Password"
                    autocomplete="current-password"
                    autofocus
                    @error('password') aria-invalid="true" @enderror
                />
                <x-input-error-for for="password" />
            </div>

            <div class="flex items-center">
                <button class="btn w-full">
                    {{ __('Confirm password') }}
                </button>
            </div>
        </div>
    </form>
</x-layouts.auth>

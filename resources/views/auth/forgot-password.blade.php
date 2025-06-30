<x-layouts.auth
    :page-title="__('Forgot password')"
    :title="__('Forgot password')"
    :description="__('Enter your email to receive a password reset link')"
>
    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <div class="space-y-6">
        <form class="form" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="grid gap-2">
                <label for="email">{{ __('Email address') }}</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    autocomplete="off"
                    required
                    autofocus
                    value="{{ old('email') }}"
                    @error('email') aria-invalid="true" @enderror
                />
                <x-input-error-for for="email" />
            </div>

            <div class="my-6 flex items-center justify-start">
                <button class="btn w-full">
                    {{ __('Email password reset link') }}
                </button>
            </div>
        </form>

        <div class="text-muted-foreground space-x-1 text-center text-sm">
            <span>Or, return to</span>
            <x-text-link href="{{ route('login') }}">log in</x-text-link>
        </div>
    </div>
</x-layouts.auth>

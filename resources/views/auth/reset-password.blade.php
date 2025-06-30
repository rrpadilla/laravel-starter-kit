<x-layouts.auth
    :page-title="__('Reset password')"
    :title="__('Reset password')"
    :description="__('Please enter your new password below')"
>
    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form class="form" method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="grid gap-6">
            <div class="grid gap-2">
                <label for="email">{{ __('Email') }}</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    autocomplete="email"
                    readonly
                    value="{{ old('email', $request->email) }}"
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
                    autocomplete="new-password"
                    required
                    autofocus
                    placeholder="{{ __('Password') }}"
                />
                <x-input-error-for for="password" />
            </div>

            <div class="grid gap-2">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    autocomplete="new-password"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Confirm Password') }}"
                />
                <x-input-error-for for="password_confirmation" />
            </div>

            <button type="submit" class="btn mt-4 w-full">
                {{ __('Reset password') }}
            </button>
        </div>
    </form>
</x-layouts.auth>

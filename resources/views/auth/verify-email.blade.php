<x-layouts.auth
    :page-title="__('Email verification')"
    :title="__('Verify email')"
    :description="__('Please verify your email address by clicking on the link we just emailed to you.')"
>
    @if (session('status') === 'verification-link-sent')
        <div class="text-center text-sm font-medium text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="space-y-6 text-center">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button class="btn-secondary" type="submit">
                {{ __('Resend verification email') }}
            </button>
        </form>

        <div class="text-center">
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button class="btn-ghost mx-auto block text-sm" type="submit">
                    {{ __('Log out') }}
                </button>
            </form>
        </div>
    </div>
</x-layouts.auth>

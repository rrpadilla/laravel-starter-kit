<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-ui.dialog
        :closable="true"
        id="confirm_user_deletion"
        :show="$errors->userDeletion->isNotEmpty()"
        title="{{ __('Are you sure you want to delete your account?') }}"
        description="{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}"
        class=""
    >
        <x-slot:trigger class="btn-destructive">
            {{ __('Delete Account') }}
        </x-slot:trigger>

        <form class="form flex flex-col gap-4" method="post" action="{{ route('settings.profile.destroy') }}">
            @csrf
            @method('delete')

            <div class="grid gap-2">
                <label for="password">{{ __('Password') }}</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="w-full"
                    placeholder="{{ __('Password') }}"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" />
            </div>

            <x-ui.dialog.footer>
                <x-ui.dialog.close>
                    {{ __('Cancel') }}
                </x-ui.dialog.close>
                <button type="submit" class="btn-destructive ms-3">
                    {{ __('Delete Account') }}
                </button>
            </x-ui.dialog.footer>
        </form>
    </x-ui.dialog>
</section>

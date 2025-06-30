<x-layouts.app :title="__('Profile')">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="card p-4 sm:p-8 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('settings.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="card  p-4 sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('settings.profile.partials.update-password-form')
                </div>
            </div>

            <div class="card p-4 sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('settings.profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

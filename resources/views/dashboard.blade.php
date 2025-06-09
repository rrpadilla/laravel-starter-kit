<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-4">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-gray-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-gray-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-gray-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-gray-100/20" />
        </div>
    </div>
</x-layouts.app>

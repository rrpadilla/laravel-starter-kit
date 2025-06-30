<div
    data-slot="card-header"
    {{ $attributes->merge(['class' => 'flex flex-col gap-1.5 px-6']) }}
>
    {{ $slot }}
</div>

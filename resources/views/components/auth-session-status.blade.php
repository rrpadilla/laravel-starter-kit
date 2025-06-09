@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-sm font-medium text-success bg-success/10 p-3 rounded-md']) }}>
        {{ $status }}
    </div>
@endif

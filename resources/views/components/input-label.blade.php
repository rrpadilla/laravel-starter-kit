@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium leading-6 text-foreground mb-2']) }}>
    {{ $value ?? $slot }}
</label>

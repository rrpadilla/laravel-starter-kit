@props(['class' => ''])
<form data-slot="dialog-close-form" method="dialog" class="absolute top-4 right-4">
    <button
        data-slot="dialog-close-form-button"
        aria-label="Close dialog"
        {{ $attributes->merge(['class' => "ring-offset-background focus:ring-ring data-[state=open]:bg-accent data-[state=open]:text-muted-foreground  rounded-xs opacity-70 transition-opacity hover:opacity-100 focus:ring-2 focus:ring-offset-2 focus:outline-hidden disabled:pointer-events-none [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4 $class"]) }}
    >
        <span class="sr-only">Close dialog</span>
        @svg('lucide-x', 'lucide lucide-x')
    </button>
</form>

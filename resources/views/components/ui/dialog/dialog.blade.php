@props([
    'id' => 'dialog-' . substr(md5(uniqid(mt_rand(), true)), 0, 8),
    'show' => false,
    'closeButton' => false,
    'closable' => true, // prevents closing the modal by clicking outside
    'title' => '',
    'description' => '',
    'header',
    'footer',
    'trigger',
])

@isset($trigger)
    <x-ui.dialog.trigger
        :id="$id"
        :asChild="$trigger->attributes->get('asChild', false)"
        class="{{ $trigger->attributes->get('class') }}"
    >
        {{ $trigger }}
    </x-ui.dialog.trigger>
@endisset

<dialog
    role="dialog"
    data-slot="dialog"
    id="{{ $id }}"
    @if($title) aria-labelledby="{{ $id }}-title" @endif
    @if($description) aria-describedby="{{ $id }}-description" @endif
    x-data
    @if ($show) x-init="$el.showModal()" @endif
    x-on:modal:open.window="$event.detail === '{{ $id }}' && $el.showModal()"
    x-on:modal:close.window="$event.detail === '{{ $id }}' && $el.close()"
>
    <div
        data-slot="dialog-overlay"
        @if($closable) onclick="this.closest('dialog').close()" @else disable-click-outside @endif
    ></div>

    <div data-slot="dialog-content" {{ $attributes }}>
        @isset($header)
            {{ $header }}
        @else
            @if ($title || $description)
                <x-ui.dialog.header :id="$id" :title="$title" :description="$description" />
            @endif
        @endisset

        {{ $slot }}

        @isset($footer)
            <x-ui.dialog.footer>
                {{ $footer }}
            </x-ui.dialog.footer>
        @endisset

        @if ($closable || $closeButton)
            <x-ui.dialog.close-form />
        @endif
    </div>
</dialog>

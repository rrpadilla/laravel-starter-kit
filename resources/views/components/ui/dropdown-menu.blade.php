@props([
    'trigger',
    'menu',
    'id' => 'dropdown-menu-' . substr(md5(uniqid(mt_rand(), true)), 0, 8),
    'dataSide' => 'bottom', // Options: bottom, top, left, right (vertical alignment)
    'dataAlign' => 'start', // Options: start, end, center (horizontal alignment)
])

<div id="{{ $id }}" {{ $attributes->merge(['class' => 'dropdown-menu']) }}>
    <button
        type="button"
        id="{{ $id }}-trigger"
        aria-haspopup="menu"
        aria-controls="{{ $id }}-menu"
        aria-expanded="false"
        {{ $trigger->attributes->except(['id', 'aria-haspopup', 'aria-controls']) }}
    >
        {{ $trigger }}
    </button>

    <div
        id="{{ $id }}-popover"
        data-popover
        aria-hidden="true"
        data-side="{{ $dataSide }}"
        data-align="{{ $dataAlign }}"
        {{ $menu->attributes->except(['id', 'data-popover', 'data-side', 'data-align']) }}
    >
        <div
            role="menu"
            id="{{ $id }}-menu"
            aria-labelledby="{{ $id }}-trigger"
        >
            {{ $menu ?? '' }}
        </div>
    </div>
</div>

@props([
    'href' => null,
    'icon' => null,
    'size' => 'sm',
])

<x-button.base
    :href="$href"
    :icon="$icon"
    :attributes="$attributes->merge([
        'class' => 'bg-indigo-500 text-white'
    ])"
>
    {{ $slot }}
</x-button.base>
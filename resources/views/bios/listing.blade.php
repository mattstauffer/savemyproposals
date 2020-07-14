<x-listing>
    <x-slot name="header">
        <h3 class="m-0 font-sans text-2xl">
            <a href="{{ route('bios.show', $bio) }}">
                {{ $bio->nickname }}
            </a>
        </h3>
    </x-slot>
    <x-slot name="actions">
        <a href="{{ route('bios.edit', $bio) }}" title="Edit">
            @svg('compose', 'w-5 fill-current inline')
        </a>
        <a href="{{ route('bios.delete', ['id' => $bio->id]) }}" class="ml-3" title="Delete">
            @svg('trash', 'w-5 fill-current inline')
        </a>
        <button type="button" data-clipboard data-clipboard-text="{{ $bio->body }}" title="Copy" class="ml-3">
            @svg('clipboard', 'w-5 fill-current inline')
        </button>
    </x-slot>
    <x-slot name="body">{{ $bio->nickname }}</x-slot>
</x-listing>
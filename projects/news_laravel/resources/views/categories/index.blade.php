<x-app-layout>
    <x-slot name="title">
        {{ __('LaravelNews - Category') }}
    </x-slot>

    <x-slot name="header">
        <x-headers.header_h2>
            {{ __('Categories') }}
        </x-headers.header_h2>
    </x-slot>

    <x-content-body>
        <x-headers.body_h2>
            {{ __('All Categories') }}
        </x-headers.body_h2>
        <div class="flex flex-wrap justify-around">
            @forelse($categories as $category)
                <div class="w-full md:w-1/2 lg:w-1/3 px-3 mt-6">
                    <x-categories.categories-preview :category="$category" />
                </div>
            @empty
                <p class="text-center italic">Categories not added yet</p>
            @endforelse
        </div>
    </x-content-body>
</x-app-layout>


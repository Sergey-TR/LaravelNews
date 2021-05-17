<x-app-layout>
    <x-slot name="title">
        {{ __('LaravelNews - AllNews') }}
    </x-slot>
    <x-slot name="header">
        <x-headers.header_h2>
            {{ __('All News') }}
        </x-headers.header_h2>
    </x-slot>

    <x-content-body>
        <x-headers.body_h2>
            {{ __('All News') }}
        </x-headers.body_h2>
        <div class="flex flex-wrap justify-around">
            @forelse($news as $newsItem)
                <div class="w-full md:w-1/2 lg:w-1/3 px-3 mt-6">
                    <x-news.news-preview :news="$newsItem" :categoryIsVisible="true"/>
                </div>
            @empty
                <p class="text-center italic">No News yet</p>
            @endforelse
        </div>
    </x-content-body>
</x-app-layout>

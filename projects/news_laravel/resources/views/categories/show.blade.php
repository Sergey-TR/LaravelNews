<x-app-layout>
    <x-slot name="title">
        {{ __('LaravelNews - ' . $category->title ) }}
    </x-slot>
    <x-slot name="header">
        <x-headers.header_h2>
            {{ __('Category') }}
        </x-headers.header_h2>
    </x-slot>

    <x-content-body>
        <x-headers.body_h2>
            {{ __('News in the category ' . $category->title) }}
        </x-headers.body_h2>
        <div class="flex flex-wrap justify-around">
            @forelse($news as $newsItem)
                <div class="w-full md:w-1/2 lg:w-1/3 px-3 mt-6">
                    <x-news.news-preview :news="$newsItem"/>
                </div>
            @empty
                <p class="text-center italic">Новостей пока нет</p>
            @endforelse
        </div>
    </x-content-body>
</x-app-layout>

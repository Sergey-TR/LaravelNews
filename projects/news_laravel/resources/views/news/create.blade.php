<x-app-layout>
    <x-slot name="title">
        {{ __('Laravel - Добавление новости') }}
    </x-slot>
    <x-slot name="header">

            {{ __('Новости') }}

    </x-slot>

    <x-content-body>

            Добавление новости

        <x-news.news-create :categories="$categories" />
    </x-content-body>
</x-app-layout>

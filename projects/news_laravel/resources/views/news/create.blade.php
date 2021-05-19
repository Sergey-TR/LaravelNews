<x-app-layout>
    <x-slot name="title">
        {{ __('LaravelNewsAddNews') }}
    </x-slot>
    <x-slot name="header">
        <x-headers.header_h2>
            {{ __('News') }}
        </x-headers.header_h2>
    </x-slot>

    <x-content-body>
        <x-headers.body_h2>
            Добавление новости
        </x-headers.body_h2>
        <x-forms.news-create :categories="$categories" />
    </x-content-body>
</x-app-layout>
{{--<h1>CREATE NEWS</h1>--}}

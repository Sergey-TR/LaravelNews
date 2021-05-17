<x-app-layout>
    <x-slot name="title">
        {{ __('LaravelNews - ' . $news->title ) }}
    </x-slot>

    <x-slot name="header">
        <x-headers.header_h2>
            {{ __('News') }}
        </x-headers.header_h2>
    </x-slot>

    <x-content-body>
        <x-headers.body_h2>
            {{ $news->title }}
        </x-headers.body_h2>
        <div class="">
            <p>{{ $news->description }}</p>
            <small> {{ $news->created_at->format("d.m.Y") }} </small>
        </div>
    </x-content-body>
</x-app-layout>

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
        <div class="mt-4">
            <p>{{ $news->description }}</p>
            <small> {{ $news->created_at->format("d.m.Y") }} </small>
        </div>
    </x-content-body>

    <x-content-body>
        <x-headers.body_h2>
            Add comment
        </x-headers.body_h2>
        <x-forms.comment-create />
    </x-content-body>

    <x-content-body>
        <x-headers.body_h2>
            Comments
        </x-headers.body_h2>
        @forelse($comments as $comment)
            <x-comment :comment="$comment" />
        @empty
            <p class="text-center italic">No comments</p>
        @endforelse
    </x-content-body>
</x-app-layout>

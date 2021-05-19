<x-app-layout>
    <x-slot name="title">
        {{ __('LaravelNewsAbout') }}
    </x-slot>
    <x-slot name="header">
        <x-headers.header_h2>
            {{ __('About Laravel News') }}
        </x-headers.header_h2>
    </x-slot>

    <x-content-body>
        <x-headers.body_h2>
            Info with Laravel News
        </x-headers.body_h2>
        <x-creating-success />
        <div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Amet iure molestias nulla repudiandae. Ad error nihil sunt.
                Aliquam atque corporis cum dolorem earum eius enim, error esse est
                eveniet ex fuga harum ipsum laborum magnam maiores nesciunt numquam,
                officia optio placeat praesentium provident quae qui quidem reprehenderit
                ut voluptate! Architecto at atque deleniti ducimus nesciunt nostrum placeat sapiente.
                Accusantium animi atque delectus illum incidunt labore modi, molestias possimus
                provident suscipit tempora temporibus totam vel. Accusantium, aliquam dolor dolores
                excepturi facere minima nemo, nobis qui quis quisquam quo voluptate voluptatum.
                Assumenda aut dolores eveniet excepturi mollitia nam repellendus saepe sequi voluptates.
            </p>
        </div>
    </x-content-body>
</x-app-layout>


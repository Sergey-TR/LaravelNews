<div>
    @if(session()->has('success'))
        <p class="text-red-600 font-medium">
            * {{ session()->get('success') }}
        </p>
    @endif
</div>


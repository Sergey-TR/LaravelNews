<form action="{{ route('news-comment.store') }}" method="post" class="center">
    @csrf
    <div class="flex flex-col">
        <div>
            <x-auth-validation-errors :errors="$errors"/>
        </div>
        <label for="name">Enter your name</label>
        <input type="text" name="name" placeholder="Введите Ваше имя">
        <br />
        <label for="description">Comment</label>
        <textarea name="description" cols="30" rows="10" placeholder="Введите комментарий"></textarea>
        <div class="self-end">
            <x-buttons.submit>Add Comment</x-buttons.submit>
        </div>
    </div>
</form>

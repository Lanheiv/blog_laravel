<x-layout>
    <x-slot:title>
        Rediģēt
    </x-slot:title>
    
    <h1>Rediģēt: {{ $article->title }}</h1>

    <form method="POST" action="/article/{{ $article->id }}">
        @csrf
        @method('PUT')

        <label>
            Virsraksts:
            <input type="text" name="title" value="{{ $article->title }}">
        </label>
        @error("content")
            <p>{{ $message }}</p>
        @enderror

        <label>
            Virsraksts:
            <input type="text" name="content" value="{{ $article->content }}">
        </label>
        @error("title")
            <p>{{ $message }}</p>
        @enderror

        <label>
            <select name="category_id">
                <option value="0">--Tukšums--</option>
                @foreach($categories as $categories)
                    <option value="{{ $categories->id }}"
                        {{ $categories->id == $article->category_id ? 'selected' : '' }}>
                        {{ $categories->category_name }}
                    </option>
                @endforeach
            </select>
        </label>
        @error("category_id")
            <p>{{ $message }}</p>
        @enderror

        <button>Rediģēt</button>

    </form>
</x-layout>

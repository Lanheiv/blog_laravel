<x-layout>
    <x-slot:title>
        Skatīt {{ $article->title }}
    </x-slot:title>

    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>

    <a href="/article/{{ $article->id }}/edite">Rediģēt</a>

    <form method="POST" action="/article/{{ $article->id }}">
        @csrf
        @method('delete')

        <button>Dzēst</button>
    </form>

    <!-- Komentāru daļa -->
    <div>
        <h3>Komentāri</h3>

        <form method="POST" action="/comments/create">
            @csrf

            <label>
                Komentārs:
                <input type="text" name="comment">

                @error("comment")
                    <p>{{ $message }}</p>
                @enderror
            </label>
            
            <label>
                Autors:
                <select name="user">
                    <option value="0">Anonīms</option>
                    @foreach($user as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </label>

            <input name="article_id" type="hidden" value="{{ $article->id }}">

            <button>Saglabāt</button>
        </form>
    </div>
</x-layout>
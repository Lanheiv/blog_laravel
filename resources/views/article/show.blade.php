<x-layout>
    <x-slot:title>
        Skatīt {{ $article->title }}
    </x-slot:title>

    <!-- Raksta sadaļa -->
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>

    <a href="/article/{{ $article->id }}/edit">Rediģēt</a>

    <form method="POST" action="/article/{{ $article->id }}">
        @csrf
        @method('delete')

        <button>Dzēst</button>
    </form>

    <!-- Komentāru izvads -->
    @if($comments->isNotEmpty())
        <div>
            <h3>Komentāri</h3>

            @foreach($comments as $comments)
            <div>
                <p>{{ $comments->comment }}</p>

                <form method="POST" action="/comments/{{ $comments->id }}">
                    @csrf
                    @method('delete')

                    <button>Dzēst</button>
                </form>
                <form method="POST" action="/comments/{{ $comments->id }}/edite">
                    @csrf

                    <button>Rediģēt</button>
                </form>
            </div>
            @endforeach
        </div>
    @endif

    <!-- Komentāru daļa -->
    <div>
        <h3>Komentāra izveide</h3>

        <form method="POST" action="/comments">
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
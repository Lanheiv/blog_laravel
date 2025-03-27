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
</x-layout>
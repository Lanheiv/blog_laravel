<x-layout>
    <x-slot:title>
        Skatīt {{ $article->title }}
    </x-slot:title>

    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>

    <a href="/article/{{ $article->id }}/edite">Rediģēt</a>
    <a href="/article/{{ $article->id }}/delete">Dzēst</a>

</x-layout>
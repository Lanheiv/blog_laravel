<x-layout>
    <x-slot:title>
        Skatīt rakstu
    </x-slot:title>

    <h1>Raksti</h1>

    <ul>
        @foreach($article as $article)
            <li><a href="/article/{{ $article->id }}"> {{ $article->title }} </a></li>
        @endforeach
    </ul>
</x-layout>
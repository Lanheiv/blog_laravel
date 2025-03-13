<x-layout>
    <x-slot:title>
        Raksti
    </x-slot:title>

    <h1>Raksti</h1>

    <ul>
        @foreach($article as $article)
            <li> {{ $article->title }} </li>
        @endforeach
    </ul>
</x-layout>
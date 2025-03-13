<x-layout>
    <x-slot:title>
        Skatīt rakstu
    </x-slot:title>

    <h1>Raksti</h1>

    <ul>
        @foreach($article as $article)
            <li> {{ $article->title }} </li>
        @endforeach
    </ul>
</x-layout>
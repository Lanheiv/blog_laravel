<x-layout>
    <x-slot:title>
        Skatīt {{ $categorie->category_name }}
    </x-slot:title>

    <h1>{{ $categorie->category_name }}</h1>
    <p> {{ $categorie->details }} </p>

    <a href="/categorie/{{ $categorie->id }}/edite">Rediģēt</a>

    <form method="POST" action="/categorie/{{ $categorie->id }}">
        @csrf
        @method('delete')

        <button>Dzēst</button>
    </form>
</x-layout>
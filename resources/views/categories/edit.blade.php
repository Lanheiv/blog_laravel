<x-layout>
    <x-slot:title>
        Rediģēšana
    </x-slot:title>

    <h1>Rediģēt: {{ $categorie->category_name }}</h1>

    <form method="POST" action="/categorie/{{ $categorie->id }}">
        @csrf
        @method('PUT')

        <label>
            Kategorija:
            <input type="text" name="category_name" value="{{ $categorie->category_name }}">
        </label>
        @error("category_name")
            <p>{{ $message }}</p>
        @enderror

        <label>
            Apraksts:
            <input type="text" name="details" value="{{ $categorie->details }}">
        </label>
        @error("details")
            <p>{{ $message }}</p>
        @enderror
        
        <button>Saglabāt</button>
    </form>
</x-layout>
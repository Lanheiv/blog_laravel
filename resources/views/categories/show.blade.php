<x-layout>
    <x-slot:title>
        Skatīt {{ $categorie->category_name }}
    </x-slot:title>

    <h1>{{ $categorie->category_name }}</h1>
    <p> {{ $categorie->details }} </p>
    
</x-layout>
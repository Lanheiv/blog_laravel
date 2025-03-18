<x-layout>
    <x-slot:title>
        Skatīt kategorijas
    </x-slot:title>

    <h1>Kategorijas</h1>

    <ul>
        @foreach($categories as $categories)
            <li><a href="/categorie/{{ $categories->id }}"> {{ $categories->category_name }} </a></li>
        @endforeach
    </ul>
</x-layout>
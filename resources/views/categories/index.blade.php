<x-layout>
    <x-slot:title>
        Skatīt kategorijas
    </x-slot:title>

    <h1>Kategorijas</h1>

    <ul>
        @foreach($categories as $categories)
            <li> {{ $categories->category_name }} </li>
        @endforeach
    </ul>
</x-layout>
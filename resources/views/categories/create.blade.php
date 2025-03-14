<x-layout>
    <x-slot:title>
        Kategorijas izveide
    </x-slot:title>

    <h1>Kategorijas izveide</h1>

    <form class="create" action="/categorie" method="POST">
        @csrf

        <label>
            <p>Kategorija:</p>
            <input name="category_name" placeholder="Šeit ievadiet kategoriju" required />
        </label>
        <label>
            <p>Apraksts:</p>
            <input name="details" placeholder="Šeti ievadiet aprakstu" required />
        </label>
    
        <button>Saglabāt</button> 
    </form>
</x-layout>
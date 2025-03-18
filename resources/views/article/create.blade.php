<x-layout>
    <x-slot:title>
        Raksta izveide
    </x-slot:title>

    <h1>Raksta izveide</h1>

    <form class="create" action="/article" method="POST">
        @csrf

        <label>
            <p>Virsraksts:</p>
            <input name="title" placeholder="Šeit ievadiet virsraksts" required />
        </label>
        <label>
            <p>Raksts:</p>
            <input name="content" placeholder="Šeti ievadiet rakstu" required />
        </label>
        <label>
            <select name="category_id">
                <option value="0">--Tukšums--</option>
                @foreach($categories as $categories)
                    <option value=" {{ $categories->id }} ">{{ $categories->category_name }}</option>
                @endforeach
            </select>
        </label>
    
        <button>Saglabāt</button> 
    </form>
</x-layout>
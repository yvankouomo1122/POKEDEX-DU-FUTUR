<div class="dark:bg-black flex flex-col gap-5 mt-20">
    <div class="container flex gap-5 mx-auto">
        <input type="text" name="" placeholder="Faire une recherche" class="border px-2 py-0 rounded-lg flex-1 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-100" wire:model='pk' wire:keydown.enter='search' />
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4" wire:click="search">Chercher</button>
    </div>
    <div class="grid grid-cols-4 gap-5 mx-auto container">
        @foreach ($pokemons as $item)
        <div wire:key="{{ $item->name }}"
            class="flex flex-col gap-3 border no-border rounded-lg hover:cursor-pointer hover:shadow-3xl duration-300 transition-all relative">
            <a href="/details/{{$item->id}}">
                <img src="{{ asset('storage/'. $item->image) }}" class="w-full aspect-square" alt="" srcset="">
            </a>
            <div class="font-thin p-5">
                <h2 class="dark:text-white text-xl font-semibold">{{ $item->name }}</h2>
                <p class="dark:text-white">{{ $item->weight }}kg</p>
                <p class="dark:text-white">{{ $item->height }}in</p>
            </div>
            <a href="/details/{{$item->id}}" class="py-2 m-5 text-white bg-gray-900 hover:bg-gray-700 transition-all duration-300 rounded-xl text-center">Details</a>
        </div>

    @endforeach

    </div>
</div>



<div class="flex flex-col gap-5">
    <div class="container flex gap-5 mx-auto">
        <input type="text" name="" placeholder="Faire une recherche" class="border px-2 py-0 rounded-lg flex-1" wire:model='pk' id=""/>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4" wire:click="search">Chercher</button>
    </div>
    <div class="grid grid-cols-4 gap-5 mx-auto container">
        @foreach ($pokemons as $item)
        <div wire:key="{{ $item->name }}"
            class="flex flex-col gap-3 border rounded-lg hover:cursor-pointer hover:shadow-3xl duration-300 transition-all relative">

            <img src="{{ asset('storage/'. $item->image) }}" class="w-full aspect-square" alt="" srcset="">
            <div class="font-thin p-5">
                <h2 class="text-xl font-semibold">{{ $item->name }}</h2>
                <p class="">{{ $item->weight }}kg</p>
                <p class="">{{ $item->height }}in</p>
            </div>
            <a href="/details/{{$item->id}}"
            class="py-2 m-5 text-white bg-gray-900 hover:bg-gray-700 transition-all duration-300 rounded-xl text-center">Details</a>
        </div>

    @endforeach

    </div>
</div>



<div class="container mx-auto">
    @if($isOpen)
        @include('livewire.createp')
    @endif

    <button name="ajouter" wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
        Ajouter
    </button>

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Npm</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PV</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Poids</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Taille</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($pokemons as $pokemon)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $pokemon->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $pokemon->hp }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $pokemon->weight }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $pokemon->height }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button wire:click="edit({{ $pokemon->id }})" class="text-indigo-600 hover:text-indigo-900">Modifier</button>
                        <button wire:click="delete({{ $pokemon->id }})" class="text-red-600 hover:text-red-900 ml-4">Supprimer</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

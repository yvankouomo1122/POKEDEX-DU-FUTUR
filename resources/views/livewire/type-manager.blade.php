<div class="container mx-auto">
    @if($isOpen)
        @include('livewire.createt')
    @endif

    <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
        Ajouter
    </button>

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Couleur</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($types as $type)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $type->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $type->color }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button wire:click="edit({{ $type->id }})" class="text-indigo-600 hover:text-indigo-900">Modifier</button>
                        <button wire:click="delete({{ $type->id }})" class="text-red-600 hover:text-red-900 ml-4">Supprimer</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

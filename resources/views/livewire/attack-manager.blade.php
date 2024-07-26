<div class="container mx-auto mt-20">
    <h2 class="text-2xl font-bold mb-6 dark:text-white">Gestion des attaques</h2>
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @endif

    <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
        Ajouter
    </button>

    @if($isOpen)
        @include('livewire.create')
    @endif

    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-800">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Nom</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Dégâts</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Type</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700 dark:text-white">
            @foreach($attacks as $attack)
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-800">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $attack->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $attack->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $attack->damage }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">---
                        {{-- {{ $attack->types->name }} --}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button wire:click="edit({{ $attack->id }})" class="text-indigo-600 hover:text-indigo-900">
                            Modifier
                        </button>
                        <button wire:click="delete({{ $attack->id }})" class="text-red-600 hover:text-red-900 ml-4">
                            Supprimer
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

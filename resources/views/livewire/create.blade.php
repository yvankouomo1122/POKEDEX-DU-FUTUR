<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <form>
                <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start ">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left ">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                                {{ $attack_id ? 'Modifier' : 'Ajouter' }}
                            </h3>
                            <div class="mt-2">
                                <div>
                                    <label for="pokemon_id" class="block text-sm font-medium text-gray-700 dark:text-gray-100">Pokemon</label>
                                    <select id="pokemon_id" wire:model="pokemon_id" class="form-select border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                        <option value="">Choisir un Pokemon</option>
                                        @foreach($pokemons as $pokemon)
                                            <option value="{{ $pokemon->id }}">{{ $pokemon->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('pokemon_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-100">Nom</label>
                                    <input type="text" id="name" wire:model="name" class="border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"/>
                                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label for="damage" class="block text-sm font-medium text-gray-700 dark:text-gray-100">Degats</label>
                                    <input type="number" id="damage" wire:model="damage" class="border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"/>
                                    @error('damage') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label for="type_id" class="block text-sm font-medium text-gray-700 dark:text-gray-100">Type</label>
                                    <select id="type_id" wire:model="type_id" class="form-select border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                        <option value="">Choisir un Type</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('type_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-100">Description</label>
                                    <textarea id="description" wire:model="description" class="border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"></textarea>
                                    @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="mt-4">
                                    <input type="file" wire:model="image" class="form-input dark:bg-gray-900 dark:text-gray-100">
                                    @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" wire:click.prevent="store()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 sm:ml-3 sm:w-auto sm:text-sm">
                        {{ $attack_id ? 'Update' : 'Save' }}
                    </button>
                    <button type="button" wire:click="closeModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

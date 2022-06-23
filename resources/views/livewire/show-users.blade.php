<div>
    <div class="flex relative mt-1">
        @can('usuarios.create')
            <div class="flex-none mr-10">
                <a href="/usuarios/create" type="button"
                    class="focus:outline-none text-white text-sm py-3 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                    Agregar usuario
                </a>
            </div>
        @endcan
        <input type="text"
            class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-500 transition-colors"
            placeholder="Buscar" wire:model="search" type="search">
    </div>
    @if ($users->count() > 0)
        <x-table>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal font-bold">
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Nombre</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Correo</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Tipo de usuario</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Estado</th>
                        @canany(['usuarios.edit', 'usuarios.destroy'])
                            <th scope="col" class="px-6 py-3 text-center uppercase tracking-wider">Acciones</th>
                        @endcanany
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    
                </tbody>
            </table>
        </x-table>
        {{ $users->links() }}
    @else
        <h2 class="mt-4 font-bold">¡No hay resultados!</h2>
    @endif
</div>
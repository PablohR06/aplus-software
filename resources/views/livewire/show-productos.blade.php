<div>
    <div class="flex relative mt-1">
        @can('productos.create')
            <div class="flex-none mr-10">
                <a href="/productos/create" type="button"
                    class="focus:outline-none text-white text-sm py-3 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                    Agregar producto
                </a>
            </div>
        @endcan
        <input type="text"
            class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-500 transition-colors"
            placeholder="Buscar" wire:model="search" type="search">
    </div>
    @if ($productos->count() > 0)
        <x-table>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal font-bold">
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Codigo</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Nombre</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Descripción</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Cantidad</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Precio Compra</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Precio Neto</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Precio + IVA</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Categoria</th>
                        @canany(['productos.edit', 'productos.destroy'])
                            <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Estado</th>
                            <th scope="col" class="px-6 py-3 text-center uppercase tracking-wider">Acciones</th>
                        @endcanany
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    
                </tbody>
            </table>
        </x-table>
        {{ $productos->links() }}
    @else
        <h2 class="mt-4 font-bold">¡No hay resultados!</h2>
    @endif
</div>
<div>
    <input type="text"
        class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-500 transition-colors"
        placeholder="Buscar" wire:model="search" type="search">
    <x-table>
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal font-bold">
                    <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Código</th>
                    <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Producto</th>
                    <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Stock</th>
                    <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Categoria</th>
                    @if (!$is_editing)
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Cantidad</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Tipo</th>
                        <th scope="col" class="px-6 py-3 text-left uppercase tracking-wider">Acción</th>
                    @endif
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                
            </tbody>
        </table>
    </x-table>
    
    {{ $productos->links() }}
</div>
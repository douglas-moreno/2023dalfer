<div>
    <table class="w-full border border-black border-solid">
        <caption class="p-2">
            <button wire:click="update" spinner="update" label="Atualizar" />
        </caption>
        <tr>
            <td class="py-2">
                <input wire:model="search" icon="search" placeholder="Localizar Pedido" type="search" />
            </td>
        </tr>
    </table>
    <table class="w-full border border-black border-solid">
        <thead>
            <tr>
                <th class="p-2 border border-black border-solid">Pedido</th>
                <th class="p-2 border border-black border-solid">Código do Cliente</th>
                <th class="p-2 border border-black border-solid">Nome do Cliente</th>
                <th class="p-2 border border-black border-solid">Importar Pedido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->preSale as $pedido)
                <tr class="border border-black border-solid bg-slate-100">
                    <td class="p-2">{{ $pedido->pedido_id }}</td>
                    <td class="p-2">{{ $pedido->cliente_id }}</td>
                    <td class="p-2">{{ $pedido->cliente }}</td>
                    <td class="p-2 text-center">
                        <button.circle sm positive icon="check" wire:click="import({{ $pedido->pedido_id }})"
                            spinner="import({{ $pedido->pedido_id }})" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="py-2">
        {{ $this->preSale->links() }}
    </div>

</div>

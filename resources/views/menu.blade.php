<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            MENU
        </h2>
    </x-slot>

    <div class="flex gap-4 justify-center p-6">
        <div class="flex px-10 py-4">
            <a class="p-4 bg-blue-400 rounded border border-blue-900 hover:bg-blue-900 hover:text-white"
                href="{{ route('presale') }}">Importar</a>
        </div>
        <div class="flex px-10 py-4">
            <button class="p-4 bg-blue-400 rounded border border-blue-900 hover:bg-blue-900 hover:text-white" positive
                label="Faturamento" href="#">Faturamento</button> {{--   "{{ route('faturamento.index') }}" />  --}}
        </div>
        <div class="flex px-10 py-4">
            <button class="p-4 bg-blue-400 rounded border border-blue-900 hover:bg-blue-900 hover:text-white" positive
                label="Engenharia" href="#">Engenharia</button>
        </div>
    </div>
</x-app-layout>

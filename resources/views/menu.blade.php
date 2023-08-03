<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            MENU
        </h2>
    </x-slot>

    <div class="flex gap-4 justify-center">
        <div>
            <x-button indigo label="Importar - Omie" href="#" /> {{--   "{{ route('pre-faturamento') }}" /> --}}
        </div>
        <div>
            <x-button positive label="Faturamento" href="#" /> {{--   "{{ route('faturamento.index') }}" />  --}}
        </div>
        <div>
            <x-button positive label="Engenharia" href="#" />
        </div>
    </div>
</x-app-layout>

<!-- resources/views/transporte_cards.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Informações de Transporte
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach($transportes as $transporte)
                        <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold mb-2">Placa do Caminhão: {{ $transporte->placa_caminhao }}</h3>
                            <p><strong>Motorista:</strong> {{ $transporte->motorista }}</p>
                            <p><strong>Situação da Viagem:</strong> {{ $transporte->situacao_viagem }}</p>
                            <p><strong>Previsão de Chegada:</strong> {{ $transporte->previsao_chegada }}</p>
                            <div class="mt-4">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Mais detalhes</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

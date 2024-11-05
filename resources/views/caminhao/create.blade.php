<x-app-layout>
    <div class="container">
        <x-slot name="header">
            <h1>Cadastrar Caminhão</h1>
        </x-slot>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="case-width bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <form action="{{ route('caminhao.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="modelo">Modelo:</label>
                            <input type="text" name="modelo" id="modelo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="placa">Placa:</label>
                            <input type="text" name="placa" id="placa" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ano">Ano de Fabricação:</label>
                            <input type="number" name="ano" id="ano" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ano">Ano do Modelo:</label>
                            <input type="number" name="ano" id="ano" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cor">Cor:</label>
                            <input type="text" name="cor" id="cor" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

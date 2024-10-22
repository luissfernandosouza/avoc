<x-app-layout>
    <div class="container">
        <h1>Cadastrar Caminhão</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

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
                <label for="ano">Ano:</label>
                <input type="number" name="ano" id="ano" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cor">Cor:</label>
                <input type="text" name="cor" id="cor" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</x-app-layout>


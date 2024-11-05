<x-app-layout>
    <div class="container">
    <x-slot name="header">
        <h1>Cadastrar Motorista</h1>
    </x-slot>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="case-width bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <form action="{{ route('motorista.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" id="cpf" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="n_registro">N.Registro:</label>
                            <input type="text" name="n_registro" id="n_registro" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria:</label>
                            <input type="text" name="categoria" id="categoria" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="primeira_cnh">1°Habilitação:</label>
                            <input type="text" name="primeira_cnh" id="primeira_cnh" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="validade">Validade:</label>
                            <input type="text" name="validade" id="validade" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="data_emissao">Data da Emissão:</label>
                            <input type="text" name="data_emissao" id="data_emissao" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="data_nascimento">Data de Nascimento:</label>
                            <input type="text" name="data_nascimento" id="data_nascimento" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="org_emissor">Orgão Emissor:</label>
                            <input type="text" name="org_emissor" id="org_emissor" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


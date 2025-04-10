<div class="container py-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Detalhes do Cliente</h2>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h5>Informações Pessoais</h5>
                    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
                    <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
                    <p><strong>Email:</strong> {{ $cliente->email }}</p>
                    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
                </div>
                <div class="col-md-6">
                    <h5>Endereço</h5>
                    <p>{{ $cliente->endereco }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                    Voltar para lista
                </a>
                <div>
                    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-primary">
                        Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

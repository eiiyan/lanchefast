<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 400px">
 feature/clientes-create-show-edit
        <h2 class="text-center mb-4"><i class="bi bi-person-circle me-2" style="font-size: 1.5rem;"></i>Detalhes do Cliente</h2>

        <h2 class="text-center mb-4">Detalhes do Cliente</h2>
main

        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5 class="fw-bold">Informações  Pessoais</h5>
                        <hr class="mx-auto mb-4" style="width: 70%;">
                    </div>
                    <p class="mt-2"><strong>Nome:</strong> {{ $cliente->nome }}</p>
                    <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
                    <p><strong>Email:</strong> {{ $cliente->email }}</p>
                    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
                    <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                    Voltar para lista
                </a>
                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-primary">
                    Editar
                </a>
            </div>
        </div>
    </div>
</div>

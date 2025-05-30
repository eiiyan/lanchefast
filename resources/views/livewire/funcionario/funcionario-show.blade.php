<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 400px">
        <h3 class="text-center mb-4"><i class="bi bi-person-badge"></i> Detalhes do Funcionário</h3>

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
                        <h5 class="fw-bold">Informações Pessoais</h5>
                        <hr class="mx-auto mb-4" style="width: 70%;">
                    </div>
                    <p class="mt-2"><strong>Nome:</strong> {{ $funcionario->nome }}</p>
                    <p><strong>CPF:</strong> {{ $funcionario->cpf }}</p>
                    <p><strong>Email:</strong> {{ $funcionario->email }}</p>
                    <p><strong>Senha:</strong> ********</p>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">
                    Voltar para lista
                </a>
                <a href="{{ route('funcionarios.edit', $funcionario) }}" class="btn btn-primary">
                    Editar
                </a>
            </div>
        </div>
    </div>
</div>

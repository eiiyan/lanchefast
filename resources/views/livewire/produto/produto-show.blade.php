<div>
    <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
        <div class="card shadow-lg p-4" style="width: 400px">
 feature/clientes-create-show-edit
            <h2 class="text-center mb-4">Editar Cliente</h2>

            <h2 class="text-center mb-4">
                <!-- Ícone do produto usando Bootstrap Icons -->
                <i class="bi bi-box-seam me-2"></i> Detalhes do Produto
            </h2>
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
feature/clientes-create-show-edit
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

                            <h5 class="fw-bold">Informações do Produto</h5>
                            <hr class="mx-auto mb-4" style="width: 70%;">
                        </div>
    
                        <p><strong>Nome:</strong> {{ $produto->nome }}</p>
                        <p><strong>Ingredientes:</strong> {{ $produto->ingredientes }}</p>
                        <p><strong>Valor:</strong> R$ {{ number_format($produto->valor, 2, ',', '.') }}</p>
                    </div>
                </div>
                
                <!-- Exibindo a imagem -->
                <div class="mb-3">
                   
                    @if ($produto->imagem)
                        <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                    @else
                        <p>Sem imagem disponível</p>
                    @endif
                </div>
    
                <div class="d-flex justify-content-between">
                    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">
                        Voltar para lista
                    </a>
                    <a href="{{ route('produtos.edit', $produto) }}" class="btn btn-primary">
 main
                        Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
feature/clientes-create-show-edit
    

 main
</div>

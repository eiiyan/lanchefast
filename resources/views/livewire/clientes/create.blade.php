
<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 400px">
        <h2 class="text-center mb-4">Cadastrar  Cliente</h2>

        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="salvar">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="nome" id="nome" wire:model="nome"
                class="form-control" placeholder="Digite seu nome">
                @error('nome') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="endereco" id="email" wire:model="endereco"
                class="form-control" placeholder="Digite seu endereço">
                @error('endereco') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="telefone" id="email" wire:model="telefone"
                class="form-control" placeholder="Digite seu telefone">
                @error('telefone') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" wire:model="email"
                class="form-control" placeholder="Digite seu email">
                @error('email') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="cpf" id="cpf" wire:model="cpf"
                class="form-control" placeholder="Digite seu cpf">
                @error('cpf') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="senha" id="senha" wire:model="senha"
                class="form-control" placeholder="Digite sua senha">
                @error('senha') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>

            @if (session()->has('success'))
                <div class="alert alert-dismissible fade show" role="alert"
                    style="background-color: #28a745; color: white; border-color: #28a745">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <button type="submit" class="btn btn-success w-100">Confirmar</button>
        </form>
    </div>
</div>

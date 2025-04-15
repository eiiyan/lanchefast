<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 400px">
        <h3 class="text-center mb-4"><i class="bi bi-person-badge"></i> Cadastrar Funcionário</h3>

        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="salvar">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" wire:model="nome"
                class="form-control" placeholder="Digite o nome">
                @error('nome') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" id="cpf" wire:model="cpf"
                class="form-control" placeholder="Digite o CPF">
                @error('cpf') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" wire:model="email"
                class="form-control" placeholder="Digite o email">
                @error('email') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="senha" wire:model="senha"
                class="form-control" placeholder="Digite a senha">
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

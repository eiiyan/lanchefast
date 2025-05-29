
        <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
            <div class="card shadow-lg p-4" style="width: 400px">
                <h2 class="text-center mb-4"><i class="bi bi-person-circle me-2" style="font-size: 1.5rem;"></i>Editar  Cliente</h2>
        
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <form wire:submit.prevent="atualizar">
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
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" id="telefone" wire:model="telefone"
                class="form-control" placeholder="Digite o telefone">
                @error('telefone') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" id="endereco" wire:model="endereco"
                class="form-control" placeholder="Digite o endereço">
                @error('endereco') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" wire:model="email"
                class="form-control" placeholder="Digite o email">
                @error('email') <span class="text-danger small">{{ $message }}</span>@enderror
            </div>
            <button type="submit" class="btn btn-warning w-100" wire:loading.attr="disabled">
                <span wire:loading.remove>Atualizar</span>
                <span wire:loading>Salvando...</span>
            </button>
        </form>
    </div>
</div>

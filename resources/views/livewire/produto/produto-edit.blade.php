<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 400px">
        <h2 class="text-center mb-4">
            <!-- Ícone do produto usando Bootstrap Icons -->
            <i class="bi bi-box-seam me-2"></i> Editar Produto
        </h2>

        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="update" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" wire:model="nome" class="form-control" placeholder="Digite o nome do produto">
                @error('nome')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ingredientes" class="form-label">Ingredientes</label>
                <input type="text" id="ingredientes" wire:model="ingredientes" class="form-control" placeholder="Digite os ingredientes">
                @error('ingredientes')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" id="valor" wire:model="valor" class="form-control" placeholder="Digite o valor do produto">
                @error('valor')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>


            <!-- New Image Upload -->
            <div class="mb-3">
                <label for="newImagem" class="form-label">Nova Imagem do Produto</label>
                <input type="file" id="newImagem" wire:model="newImagem" class="form-control">
                @error('newImagem')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror

                <!-- Preview new image -->
                @if ($newImagem)
                    <div class="mt-2">
                        <strong>Pré-visualização da nova imagem:</strong>
                        <img src="{{ $newImagem->temporaryUrl() }}" class="img-fluid" style="max-width: 200px;">
                    </div>
                @endif
            </div>

            @if (session()->has('success'))
                <div class="alert alert-dismissible fade show" role="alert" style="background-color: #28a745; color: white; border-color: #28a745">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <button type="submit" class="btn btn-warning w-100">Atualizar</button>
        </form>
    </div>
</div>

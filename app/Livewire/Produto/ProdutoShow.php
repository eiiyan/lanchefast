<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoShow extends Component
{
    public Produto $produto;

    public function mount(Produto $produto)
    {
        // Inicializa o produto
        $this->produto = $produto;
    }

    public function render()
    {
        return view('livewire.produto.produto-show');
    }

    // Método para retornar a URL da imagem
    public function getImagemUrl()
    {
        // Verifica se o produto tem imagem
        if ($this->produto->imagem) {
            return asset('storage/images' . $this->produto->imagem);
        }

        return null;  // Retorna null se não houver imagem
    }
}

<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProdutoEdit extends Component
{
    use WithFileUploads;

    public Produto $produto;

    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem; // current image filename
    public $newImagem; // new uploaded image

    protected $rules = [
        'nome' => 'required|string|max:80',
        'ingredientes' => 'required|string',
        'valor' => 'required|numeric',
        'newImagem' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ];

    protected $messages = [
        'nome.required' => 'nome é obrigatório',
        'nome.max' => 'nome requer no máximo 80 caracteres',
        'ingredientes.required' => 'ingredientes é obrigatório',
        'valor.required' => 'valor é obrigatório',
    ];

    public function mount(Produto $produto)
    {
        $this->produto = $produto;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;
        $this->imagem = $produto->imagem;
    }

    public function update()
    {
        $this->validate();

        if ($this->newImagem) {
            // Delete old image if exists
            if ($this->imagem && Storage::disk('public')->exists($this->imagem)) {
                Storage::disk('public')->delete($this->imagem);
            }
            // Store new image
            $imagemNome = $this->newImagem->store('images', 'public');
            $this->imagem = $imagemNome;
        }

        $this->produto->update([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $this->imagem,
        ]);

        session()->flash('success', 'Produto atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}

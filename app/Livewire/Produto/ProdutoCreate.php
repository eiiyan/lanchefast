<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProdutoCreate extends Component
{
    use WithFileUploads;

    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    protected $rules = [
        'nome' => 'required|string|max:80',
        'ingredientes' => 'required|string',
        'valor' => 'required|numeric',
        'imagem' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ];

    protected $messages = [
        'nome.required' => 'nome é obrigatório',
        'nome.max' => 'nome requer no máximo 80 caracteres',
        'ingredientes.required' => 'ingredientes é obrigatório',
        'valor.required' => 'valor é obrigatório',
    ];

    public function salvar()
    {
        $this->validate();

        if ($this->imagem) {
            $imagemNome = $this->imagem->store('images', 'public');
        }

        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $imagemNome ?? null,
        ]);

        session()->flash('success', 'Produto cadastrado com sucesso!');

        $this->reset(['nome', 'ingredientes', 'valor', 'imagem']);
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}

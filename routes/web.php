<?php

use App\Livewire\Clientes\Create;
use App\Livewire\Clientes\Index;
use App\Livewire\Funcionario\FuncionarioCreate;
use App\Livewire\Funcionario\FuncionarioEdit;
use App\Livewire\Funcionario\FuncionarioIndex;
use App\Livewire\Funcionario\FuncionarioShow;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\Produto\ProdutoShow;
use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\AdminIndex;
use App\Livewire\Admin\AdminCreate;
use App\Livewire\Admin\AdminEdit;
use App\Livewire\Admin\AdminShow;

Route::prefix('clientes')->group(function () { //prefixo da rota, no caso clientes
    Route::get('/', \App\Livewire\Clientes\index::class)->name('clientes.index');
    Route::get('/create', Create::class)->name('clientes.create');
    Route::get('/{cliente}', \App\Livewire\Clientes\Show::class)->name('clientes.show');
    Route::get('/{cliente}/edit', \App\Livewire\Clientes\Edit::class)->name('clientes.edit');
    
});

Route::prefix('produtos')->group(function () {
    Route::get('/', ProdutoIndex::class)->name('produtos.index');
    Route::get('/create', ProdutoCreate::class)->name('produtos.create');
    Route::get('/{produto}', ProdutoShow::class)->name('produtos.show');
    Route::get('/{produto}/edit', ProdutoEdit::class)->name('produtos.edit');
});

Route::prefix('funcionarios')->group(function () {
    Route::get('/', FuncionarioIndex::class)->name('funcionarios.index');
    Route::get('/create', FuncionarioCreate::class)->name('funcionarios.create');
    Route::get('/{funcionario}', FuncionarioShow::class)->name('funcionarios.show');
    Route::get('/{funcionario}/edit', FuncionarioEdit::class)->name('funcionarios.edit');
});

Route::prefix('admins')->group(function () {
    Route::get('/', AdminIndex::class)->name('admins.index');
    Route::get('/create', AdminCreate::class)->name('admins.create');
    Route::get('/{admin}', AdminShow::class)->name('admins.show');
    Route::get('/{admin}/edit', AdminEdit::class)->name('admins.edit');
});

Route::prefix('funcionarios')->group(function () {
    Route::get('/', FuncionarioIndex::class)->name('funcionarios.index');
    Route::get('/create', FuncionarioCreate::class)->name('funcionarios.create');
    Route::get('/{funcionario}', FuncionarioShow::class)->name('funcionarios.show');
    Route::get('/{funcionario}/edit', FuncionarioEdit::class)->name('funcionarios.edit');
});


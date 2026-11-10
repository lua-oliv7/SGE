<?php

use App\Livewire\Auth\Login;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::get('/produto/create', ProdutoIndex::class)->name('produto.produto-index');

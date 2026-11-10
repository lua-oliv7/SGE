<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $unidade_medida;
    public $preco_custo;
    public $preco_venda;
    public $quantidade;
    public $estoque_minimo;
    public $fornecedor;

    public function mount($id)
    {
        $produto = Produto::find($id);
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->marca = $produto->marca;
        $this->categoria = $produto->categoria;
        $this->unidade_medida = $produto->unidade_medida;
        $this->preco_custo = $produto->preco_custo;
        $this->preco_venda = $produto->preco_venda;
        $this->quantidade = $produto->quantidade;
        $this->estoque_minimo = $produto->estoque_minimo;
        $this->fornecedor = $produto->fornecedor;
    }

    public function update()
    {
        $produto = Produto::find($this->id);
        $produto->nome = $this->nome;
        $produto->descricao = $this->descricao;
        $produto->marca = $this->marca;
        $produto->categoria = $this->categoria;
        $produto->unidade_medida = $this->unidade_medida;
        $produto->preco_custo = $this->preco_custo;
        $produto->preco_venda = $this->preco_venda;
        $produto->quantidade = $this->quantidade;
        $produto->estoque_minimo = $this->estoque_minimo;
        $produto->fornecedor = $this->fornecedor;

        $produto->save();
    }

    public function render()
    {
        return view('livewire.produto-create');
    }
}

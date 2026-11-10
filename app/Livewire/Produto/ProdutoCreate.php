<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
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

    public function create()
    {
        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria' => $this->categoria,
            'unidade_medida' => $this->unidade_medida,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'quantidade' => $this->quantidade,
            'estoque_minimo' => $this->estoque_minimo,
            'fornecedor' => $this->fornecedor
        ]);
    }

    public function render()
    {
        session()->flash(
            'success',
            'Produto cadastrado!'
        );
        return view('livewire.produto-create');
    }
}
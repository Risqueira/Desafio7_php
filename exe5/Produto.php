<?php

class Produto
{
    private string $nome;
    private int $estoque;
    private float $valorUnit;

    public function __construct($nome, $estoque, $valorUnit)
    {
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->valorUnit = $valorUnit;
    }

    //entrada do estoque
    public function entradaEstoque($quantidade)
    {
        $this->estoque += $quantidade;
    }

    //saida do estoque
    public function saidaEstoque($quantidade)
    {
        if ($quantidade <= $this->estoque) {
            $this->estoque = $quantidade;
        } else {
            return "Quantidade insuficiente em estoque!";
        }
    }

    public function valorEstoque(){
        return $this->estoque * $this->valorUnit;
    }

    public function exibirDetalhes() {
        echo "
        <ul class='container-res'>
            <li>Produto: {$this->nome}</li>
            <li>Quantidade em Estoque: {$this->estoque}</li>
            <li>Valor Unitário: R$ " . number_format($this->valorUnit, 2, ',', '.') . "</li>
            <li>Valor Total em Estoque: R$ " . number_format($this->valorEstoque(), 2, ',', '.') . "</li>
        </ul>
        ";
    }

}
<?php
class Pedido
{
    private string $nome;
    private int $quant;
    private float $preco;
    private string $tipoCliente;

    public function __construct($nome, $quant, $preco, $tipoCliente){
        $this->nome = $nome;
        $this->quant = $quant;
        $this->preco = $preco;
        $this->tipoCliente = $tipoCliente;
    }

    //calculo bruto
    public function calcularTotalBruto(){
        return $this->quant * $this->preco;
    }

    //Desconto
    public function calcularDesconto(){
        if ($this->tipoCliente === "premium") {
            return $this->calcularTotalBruto() * 0.10;
        }
        return 0.0;
    }

    public function calcularImposto(){
        return ($this->calcularTotalBruto() - $this->calcularDesconto()) * 0.08;
    }

    public function calcularTotal(){
        return $this->calcularTotalBruto() - $this->calcularDesconto() + $this->calcularImposto();
    }

    public function exibirDetalhes() {
        return "
    <ul class='container-res'>
        <li>Nome do produto: {$this->nome}</li>
        <li>Quantidade: {$this->quant}</li>
        <li>Preço Unitário: R$ " . number_format($this->preco, 2, ',', '.') . "</li>
        <li>Cliente: {$this->tipoCliente}</li>
        <li>Total Bruto: R$ " . number_format($this->calcularTotalBruto(), 2, ',', '.') . "</li>
        <li>Desconto: R$ " . number_format($this->calcularDesconto(), 2, ',', '.') . "</li>
        <li>Imposto: R$ " . number_format($this->calcularImposto(), 2, ',', '.') . "</li>
        <li>Total Final: R$ " . number_format($this->calcularTotal(), 2, ',', '.') . "</li>
    </ul>
    ";
    }

}
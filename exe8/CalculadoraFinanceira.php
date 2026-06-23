<?php

class CalculadoraFinanceira
{
    private float $valor;
    private int $parcelas;
    private float $juroMensal;

    public function __construct($valor, $parcelas, $juroMensal)
    {
        $this->valor = $valor;
        $this->parcelas = $parcelas;
        $this->juroMensal = $juroMensal;
    }

    public function calcularParcela()
    {
        return $this->valor * pow((1 + $this->juroMensal), $this->parcelas);
    }

    public function calcularTotal()
    {
        return $this->calcularParcela() * $this->parcelas;
    }

    public function calcularJurosPago()
    {
        return $this->calcularTotal() - $this->valor;
    }

    public function exibirDetalhes()
    {
        return "
        <ul>
            <li>Valor da compra: " . number_format($this->valor, 2, ',', '.') . "</li>
            <li>N parcelas: {$this->parcelas}</li>
            <li>Taxa de juros mensal: " . number_format($this->juroMensal, 2, ',', '.') . "</li>
            <li>Valor da parcela com juros: " . number_format($this->calcularParcela(), 2, ',', '.') . "</li>
            <li>Valor total a pagar: " . number_format($this->calcularTotal(), 2, ',', '.') . "</li>
            <li>Diferença de valor (juros pagos): " . number_format($this->calcularJurosPago(), 2, ',', '.') . "</li>
        </ul>
        ";
    }
}
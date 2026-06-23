<?php

class Pessoa{
    private string $nome;
    private float $peso;
    private float $altura;

    public function __construct($nome, $peso, $altura){
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC(){
         return $this->peso / pow($this->altura, 2);
    }

     public function classificarIMC()
    {
        $imc = $this->calcularIMC();

        if ($imc < 18.5) {
            return "Abaixo do peso";
        } else if ($imc < 25) {
            return "Peso normal";
        } else if ($imc < 30) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }

    public function exibirDetalhes(){
         return "
        <ul>
            <li>Nome: {$this->nome}</li>
            <li>Peso: " . number_format($this->peso, 2, ',', '.') . "</li>
            <li>Altura: " . number_format($this->altura, 2, ',', '.') . "</li>
            <li>IMC: " . number_format($this->calcularIMC(), 2, ',', '.') . "</li>
            <li>Classificação: {$this->classificarIMC()}</li>
        </ul>
        ";
    }
}
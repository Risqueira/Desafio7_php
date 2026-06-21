<?php
class Carro
{
    private string $modelo;
    private string $combustivel;
    private float $tanque;
    private float $consumo;
    private float $kmRodados;

    public function __construct(
        string $modelo,
        string $combustivel,
        float $tanque,
        float $consumo,
        float $kmRodados
    ) {
        $this->modelo = $modelo;
        $this->combustivel = $combustivel;
        $this->tanque = $tanque;
        $this->consumo = $consumo;
        $this->kmRodados = $kmRodados;
    }

    //Calculos
    public function CalcularAutonomia()
    {
        return $this->tanque * $this->consumo;
    }
    public function calcularCustoKm()
    {
        $precoCombustivel = 0;

        if ($this->combustivel == "gasolina") {
            $precoCombustivel = 6.00;
        } elseif ($this->combustivel == "etanol") {
            $precoCombustivel = 4.20;
        }

        return $precoCombustivel / $this->consumo;
    }

    //validação se precisa de revisao ou nao
    public function verificarRevisao()
    {
        if ($this->kmRodados >= 10000) {
            return "Hora da revisão!";
        } else {
            return "Revisão ainda não necessária.";
        }
    }

    //exibir resultados
    public function exibirDetalhes() {
    return "
    <ul class='container-res'>
        <li>Modelo: {$this->modelo}</li>
        <li>Combustível: {$this->combustivel}</li>
        <li>Tanque Cheio: {$this->tanque} litros</li>
        <li>Consumo: {$this->consumo} km/l</li>
        <li>Km Rodados: {$this->kmRodados} km</li>
        <li>Autonomia: " . number_format($this->calcularAutonomia(), 2, ',', '.') . " km</li>
        <li>Custo por Km: R$ " . number_format($this->calcularCustoKm(), 2, ',', '.') . "</li>
        <li>Status da Revisão: " . $this->verificarRevisao() . "</li>
    </ul>
    ";
}
}
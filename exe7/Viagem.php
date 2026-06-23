<?php

class Viagem
{
    private string $origem;
    private string $destino;
    private float $distancia;
    private float $tempo;
    private string $combustivel;
    private float $consumoVeiculo;

    public function __construct($origem, $destino, $distancia, $tempo, $combustivel, $consumoVeiculo)
    {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->distancia = $distancia;
        $this->tempo = $tempo;
        $this->combustivel = $combustivel;
        $this->consumoVeiculo = $consumoVeiculo;
    }

    public function calcularVelocidadeMedia() {
        return $this->distancia / $this->tempo;
    }

    public function calcularConsumoEstimado()
    {
        return $this->distancia / $this->consumoVeiculo;
    }

    public function obterPrecoCombustivel()
    {
        if ($this->combustivel == "gasolina") {
            return 6.29;
        }

        return 4.29;
    }

    public function calcularCustoViagem()
    {
        return $this->calcularConsumoEstimado() * $this->obterPrecoCombustivel();
    }

    public function exibirDetalhes()
    {
        return "
        <ul>
            <li>Origem: {$this->origem}</li>
            <li>Destino: {$this->destino}</li>
            <li>Distância: {$this->distancia} km</li>
            <li>Tempo Estimado: {$this->tempo} horas</li>
            <li>Combustível: " . ucfirst($this->combustivel) . "</li>
            <li>Consumo do Veículo: {$this->consumoVeiculo} km/l</li>
            <li>Velocidade Média: " . number_format($this->calcularVelocidadeMedia(), 2, ',', '.') . " km/h</li>
            <li>Consumo Estimado: " . number_format($this->calcularConsumoEstimado(), 2, ',', '.') . " litros</li>
            <li><strong>Custo da Viagem: R$ " . number_format($this->calcularCustoViagem(), 2, ',', '.') . "</strong></li>
        </ul>
        ";
    }
}

?>
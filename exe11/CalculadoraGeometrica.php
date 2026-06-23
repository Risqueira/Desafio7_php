<?php

class CalculadoraGeometrica
{
    private string $figura;
    private float $medida1;
    private float $medida2;

    public function __construct($figura, $medida1, $medida2 = 0)
    {
        $this->figura = $figura;
        $this->medida1 = $medida1;
        $this->medida2 = $medida2;
    }

    public function calcularArea()
    {
        switch ($this->figura) {

            case "quadrado":
                return $this->medida1 * $this->medida1;

            case "retangulo":
                return $this->medida1 * $this->medida2;

            case "circulo":
                return pi() * ($this->medida1 * $this->medida1);

            default:
                return 0;
        }
    }

    public function exibirDetalhes()
    {
        return "
        <ul>
            <li>Figura: " . ucfirst($this->figura) . "</li>
            <li><strong>Área: " . number_format($this->calcularArea(), 2, ',', '.') . "</strong></li>
        </ul>
        ";
    }
}

?>
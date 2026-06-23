<?php
class ReservaHotel
{
    private string $hospede;
    private int $noites;
    private string $tipoQuarto;

    public function __construct($hospede, $noites, $tipoQuarto)
    {
        $this->hospede = $hospede;
        $this->noites = $noites;
        $this->tipoQuarto = $tipoQuarto;
    }

    public function obterValorDiaria()
    {
        switch ($this->tipoQuarto) {
            case "luxo":
                return 200;

            case "suite":
                return 350;

            default:
                return 120;
        }
    }

    public function calcularTotal()
    {
        return $this->obterValorDiaria() * $this->noites;
    }

    public function calcularDesconto()
    {
        if ($this->noites > 5) {
            return $this->calcularTotal() * 0.10;
        }

        return 0;
    }

    public function calcularValorFinal()
    {
        return $this->calcularTotal() - $this->calcularDesconto();
    }

    public function mensagemBoasVindas()
    {
        return "Seja bem-vindo(a), {$this->hospede}!";
    }

    public function exibirDetalhes()
    {
        return "
        <ul>
            <li>" . $this->mensagemBoasVindas() . "</li>
            <li>Tipo de Quarto: " . ucfirst($this->tipoQuarto) . "</li>
            <li>Número de Noites: {$this->noites}</li>
            <li>Valor da Diária: R$ " . number_format($this->obterValorDiaria(), 2, ',', '.') . "</li>
            <li>Total da Hospedagem: R$ " . number_format($this->calcularTotal(), 2, ',', '.') . "</li>
            <li>Desconto: R$ " . number_format($this->calcularDesconto(), 2, ',', '.') . "</li>
            <li><strong>Valor Final: R$ " . number_format($this->calcularValorFinal(), 2, ',', '.') . "</strong></li>
        </ul>
        ";
    }
}

?>
<?php
class ConversorMoeda
{
    private string $valorReais;
    private string $moedaDestino;
    private float $cotacao;

    public function __construct($valorReais, $moedaDestino, $cotacao)
    {
        $this->valorReais = $valorReais;
        $this->moedaDestino = $moedaDestino;
        $this->cotacao = $cotacao;
    }

    public function converter(){
        return $this->valorReais / $this->cotacao;
    }


    public function exibirDetalhes()
    {
        $simbolo = "";

        switch ($this->moedaDestino) {
            case "USD":
                $simbolo = "US$";
                break;

            case "EUR":
                $simbolo = "€";
                break;
        }

        return "
        <ul class='container-res'>
            <li>Valor em Reais: R$ " . number_format($this->valorReais, 2, ',', '.') . "</li>
            <li>Moeda de Destino: {$this->moedaDestino}</li>
            <li>Cotação Informada: " . number_format($this->cotacao, 2, ',', '.') . "</li>
            <li>Valor Convertido: {$simbolo} " . number_format($this->converter(), 2, ',', '.') . "</li>
        </ul>
        ";
    }

}

/* esse caso seria para 06/2026 se fosse deixar fixo o valor de fato da cotacao
    public function converter(){

        if($this->cotacao == "USD"){
        return $this->valorReais / 5.46;
        }else{
            return $this->valorReais / 5.91;
        }
    }
    */

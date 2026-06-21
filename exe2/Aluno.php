<?php
class Aluno{
    private string $nome;
    private string $disciplina;
    private float $n1;
    private float $n2;
    private float $n3;
    private float $media;

    public function __construct($nome, $disciplina, $n1, $n2, $n3){

        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->n1 = (float)$n1;
        $this->n2 = (float)$n2;
        $this->n3 = (float)$n3;
        $this->calcularMedia();
    }

    public function getResumo()
    {
        return "Nome do aluno: {$this->nome}
        <br>
         Disciplina: {$this->disciplina}";
    }

    public function calcularMedia()
    {
        return $this->media = ($this->n1 + $this->n2 + $this->n3) / 3;
    }

    public function verificarStatus()
    {
        $media = $this->calcularMedia();

        if ($media >= 7) {
            return "aprovado";
        } else if ($media >= 5) {
            return "recuperação";
        } else {
            return "reprovado";
        }
    }

    public function exibirDetalhes()
    {
        return "
            <ul class = 'container-res'>
            <li>{$this->getResumo()}</li>
            <li>Nota 1: " . number_format($this->n1, 2, ',', '.') . "</li>
            <li>Nota 2: " . number_format($this->n2, 2, ',', '.') . "</li>
            <li>Nota 3: " . number_format($this->n3, 2, ',', '.') . "</li>
            <li>Media: " . number_format($this->media, 2, ',', '.') . "</li>
            <li>Status: {$this->verificarStatus()}</li>
            </ul>
            ";
    }
}

<?php
class Aluno{
    private String $nome;
    private String $disciplina;
    private float $n1;
    private float $n2;
    private float $n3;
    private float $media;

    public function __construct ($nome, $disciplina, $n1, $n2, $n3, $media){
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->n3 = $n3;
        $this->media = $media;
    }

    public function getResumo(){
        return "Nome do aluno: {$this->nome}, Disciplina: {$this->disciplina}";
    }

    public function calcularMedia(){

    }
}
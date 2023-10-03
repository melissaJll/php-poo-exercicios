<?php
namespace Livraria;

class Didatico extends Tecnico{
    private string $disciplina;
    private array $nivel = ["básico", "médio", "superior"];

    // public function getNivel():string{
    //     return implode(", ", $this->nivel);
    // }
    public function getNivel():array{
        return $this->nivel;
    }

    public function setNivel(array $novoNivel):void{
        $this->nivel = $novoNivel;
    }



    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    public function setDisciplina(string $novaDisciplina): void
    {
        $this->disciplina = $novaDisciplina;

    }
}
?>
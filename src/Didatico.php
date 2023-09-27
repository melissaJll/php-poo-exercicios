<?php
require_once "src/Didatico.php"

class Didatico extends Didatico{
    private string $disciplina;
    private array $nivel = ["básico", "médio", "superior"]

    public function getNivel():string{
        return implode(", ", $this->nivel);
    }

    public function setNivel(array $novoNivel):void{
        $this->nivel = $novoNivel;
    }

}
?>
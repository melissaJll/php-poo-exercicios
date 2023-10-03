<?php
namespace Livraria;


class Programacao extends Tecnico{
    private string $area;

    public function getArea(): string {
        return $this->area;
    }

    public function setArea(string $novaArea): void {
        $this->area = $novaArea;
    }

}

?>
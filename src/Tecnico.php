<?php
namespace Livraria;
require_once "src/Livro.php";

class Tecnico extends Livro{
    private array $formato = ["digital", "físico"];
    


    public function getFormato(): string {
        return implode(", ", $this->formato);
    }

    public function setFormato(array $novoFormato): void
    {
        $this->formato = $novoFormato;
    }
}
?>
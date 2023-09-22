<?php
class Livro{
    private string $titulo;
    private string $autor;
    private int $paginas = 0;
    //Titulo
    public function setTitulo(string $novoTitulo):void{
        $this->titulo = $novoTitulo;
    }

    public function getTitulo():string{
        return $this->titulo;
    }
    //Autor
    public function setAutor(string $novoAutor):void{
        $this->autor = $novoAutor;
    }

    public function getAutor():string{
        return $this->autor;
    }
    //Paginas
    public function setPaginas(int $novoPaginas):void{
        $this->paginas = $novoPaginas;
    }

    public function getPaginas(): int{
        return $this->paginas;
    }



}
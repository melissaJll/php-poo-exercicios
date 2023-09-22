<?php
class Livro{
    private string $titulo;
    private string $autor;
    private int $paginas = 0;



    /**
     * Get the value of titulo
     *
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @param string $titulo
     *
     * @return self
     */
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }



    public function getAutor(): string
    {
        return $this->autor;
    }


    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }



    public function getPaginas(): int
    {
        return $this->paginas;
    }


    public function setPaginas(int $paginas): self
    {
        $this->paginas = $paginas;

        return $this;
    }
}
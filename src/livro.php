<?php


abstract class Livro {
    // propriedades (ou atributos)
    private string $titulo;
    private string $autor;
    private int $paginas;



    
    /*metodos getters e setters*/
    public function getTitulo():string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor():string {
        return $this->autor;
    }

    public function setAutor(string $autor) {
        $this->autor = $autor;
    }

    public function getPaginas():int {
        return $this->paginas;
    }

    public function setPaginas(int $paginas) {
        $this->paginas = $paginas;
    }
}




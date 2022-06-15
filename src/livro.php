<?php


abstract class Livro {
    // propriedades (ou atributos)
    private string $titulo;
    private string $autor;
    private int $paginas;


    public function formataTitulo() {
        return "<strong>". mb_strtoupper($this->getTitulo()). "</strong>";

    }



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





    protected function getformataTitulo(): string
    {
        return $this->formataTitulo;
    }

     
    protected function setformataTitulo (string $formataTitulo)
    {
        $this->formataTitulo = $formataTitulo;
    }

    


}




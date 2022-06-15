<?php
require_once "Tecnico.php";


class Programacao extends Tecnico {
    private string $area;

    // GETTERS E SETTERS



   
    public function getArea(): string
    {
        return $this->area;
    }

    
    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }
    
    public function formataTitulo(string $titulo) {
        return "<i style='color:blue'>". $titulo. "</i>";

    }

}

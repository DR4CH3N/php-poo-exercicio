<?php

require_once "Livro.php";

class Tecnico extends Livro {
    private array $formato;

    // GETTERS E SETTERS

    

    public function getFormato(): array
    {
        return $this->formato;
    }

    
    public function setFormato(array $formato): self
    {
        $this->formato = $formato;

        return $this;
    }
}
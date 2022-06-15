<?php

require_once "Tecnico.php";

class Didatico extends Tecnico {
    private string $disciplina;
    private array $nivel;

    // GETTERS E SETTERS

    

   
    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    
    public function setDisciplina(string $disciplina): self
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    
    public function getNivel(): array
    {
        return $this->nivel;
    }

   
    public function setNivel(array $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }

    public function formataTitulo() {
        return "<strong>". mb_strtoupper($this->getTitulo()). "</strong>";

    }
}
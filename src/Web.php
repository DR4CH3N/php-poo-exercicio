<?php
namespace exercicio;

require_once "Programacao.php";

class Web extends Programacao {
    

    public function __construct() {
        echo "Livro de programação web";
        
    }

    // GETTERS E SETTERS
    

   
    public function getWeb(): string
    {
        return $this->web;
    }

    
    public function setWeb(string $web)
    {
        $this->web = $web;

        return $this;
    }
}

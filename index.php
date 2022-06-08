<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio livro</title>
</head>
<body>
    <h1>PHP POO - exercicio livro</h1>
    <hr>
    
    <?php
    // importando a classe
    require_once "src/cliente.php";

    // criação dos objetos
    $livroA = new Livro;
    

    // atribuindo dados via setters do objeto

    $livroA->setTitulo("Harry Potter e a pedra filosofal");
    $livroA->setAutor("JK. rowling");
    $livroA->setPaginas(600);

    


    

    /* 
    SET significa pegar uma classe e atribuir/colocar dados a ela
    GET significa pegar uma classe e fazer com que ela seja exibida
    */
    ?>

    <h2>dados dos objetos (leitura e getters)</h2>
    <h3><?=$livroA->getTitulo() ?></h3>
    <p>Autor: <?=$livroA->getAutor() ?> </p>
    <p>N° de paginas: <?=$livroA->getPaginas() ?> </p>
    
    

    
    
    
    <pre> <?=var_dump($livroA)?> </pre>
    
</body>
</html>
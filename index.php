<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio livro 2</title>
</head>
<body>
    <h1>PHP POO - exercicio livro 2</h1>
    <hr>
    
    <?php
    // importando a classe
    require_once "src/programacao.php";
    require_once "src/didatico.php";
    require_once "src/tecnico.php";

    // criação dos objetos

    $tecnicoA = new Tecnico;
    $programacaoA = new Programacao;
    $didaticoA = new Didatico;


    // atribuindo dados via setters do objeto

    $tecnicoA->setFormato(['digital', ' fisico']);
    $tecnicoA->setTitulo('um livro ai');
    $tecnicoA->setAutor('uma pessoa ai');
    $tecnicoA->setPaginas(470);
    

    $programacaoA->setArea('sistemas');

    $didaticoA->setDisciplina('biologia');
    $didaticoA->setNivel(['basico','medio','avancado']);
    

    

    


    

    /* 
    SET significa pegar uma classe e atribuir/colocar dados a ela
    GET significa pegar uma classe e fazer com que ela seja exibida
    */
    ?>

   
    <h1>Titulo: <?=$tecnicoA->getTitulo()?></h1>
    <p>Autor: <?=$tecnicoA->getAutor()?></p>
    <p>n° de paginas: <?=$tecnicoA->getPaginas()?></p>

    <h2>Tecnico</h2>
    <p>Formato: <?=implode(',', $tecnicoA->getFormato()) ?></p>

    <hr>

    <h2>Didatico</h2>
    <p>Disciplina: <?=$didaticoA->getDisciplina()?></p>
    <p>Nivel: <?= implode(',', $didaticoA->getNivel()) ?></p>

    <hr>

    <h2>Programacao</h2>
    <p>Area: <?=$programacaoA->getArea()?></p>
    
    
    
    <pre> <?=var_dump($tecnicoA)?> </pre>
    <pre> <?=var_dump($didaticoA)?> </pre>
    <pre> <?=var_dump($programacaoA)?> </pre>
    
</body>
</html>
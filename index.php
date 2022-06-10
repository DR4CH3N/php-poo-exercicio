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

    // criação dos objetos
    $livroA = new Livro;
    $tecnicoA = new Tecnico;
    $programacaoA = new Programacao;
    $didaticoA = new Didatico;


    

    // atribuindo dados via setters do objeto

    $livroA->setTitulo("Harry Potter e a pedra filosofal");
    $livroA->setAutor("JK. rowling");
    $livroA->setPaginas(600);

    $tecnicoA->setFormato(['ditital', 'fisico']);

    $programacaoA->setArea('sistemas');

    $didaticoA->setDisciplina('biologia');
    $didaticoA->setNivel(['basico','medio','avancado']);
    

    

    


    

    /* 
    SET significa pegar uma classe e atribuir/colocar dados a ela
    GET significa pegar uma classe e fazer com que ela seja exibida
    */
    ?>

    <h2>Livro</h2>
    <h3><?=$livroA->getTitulo() ?></h3>
    <p>Autor: <?=$livroA->getAutor() ?> </p>
    <p>N° de paginas: <?=$livroA->getPaginas() ?> </p>
    
    <hr>

    <h2>Tecnico</h2>
    <p>Formato: <?=implode(',', $tecnicoA->formato) ?></p>

    <hr>

    <h2>Didatico</h2>
    <p>Disciplina: <?=$didaticoA->disciplina?></p>
    <p>Nivel: <?= implode(',', $didaticoA->nivel) ?></p>

    <hr>

    <h2>Programacao</h2>
    <p>Area: <?=$programacaoA->area?></p>
    
    
    
    <pre> <?=var_dump($livroA)?> </pre>
    <pre> <?=var_dump($tecnicoA)?> </pre>
    <pre> <?=var_dump($didaticoA)?> </pre>
    <pre> <?=var_dump($programacaoA)?> </pre>
    
</body>
</html>
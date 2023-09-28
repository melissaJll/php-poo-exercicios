<?php  
// $L1 = new Livro;
// $L1->setTitulo("Anexos");
// $L1->setAutor("Rainbow rowell");
// $L1->setPaginas(200);


require_once "src/Tecnico.php";
$T1 = new Tecnico;
$T1->setFormato(["digital"]);

require_once "src/Programacao.php";
$P1 = new Programacao;
$P1->setTitulo("PHP para desenvolvimento Web");
$P1->setArea("Web");
$P1->setPaginas(233);
$P1->setArea("TI");
$P1->setAutor("Marcelo Xavier Vieira");
$P1->setFormato(["Fisico"]);


require_once "src/Didatico.php";
$D1 = new Didatico;
$D1->setTitulo("Matemática para o ensino médio");
$D1->setNivel(["Digital"]);
$D1->setDisciplina("Matemática");

?>
<pre><?=var_dump($P1)?></pre>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <h1>Exercicio Livros </h1>
    <hr>

    <h2>Técnico</h2>
    
    <p><?=$T1->getFormato()?></p>

    <h2>Programacao</h2>
    <p>Titulo: <?=$P1->getTitulo()?></p>
    <p>Area: <?=$P1->getArea()?></p>
    <p>Número de páginas: <?=$P1->getPaginas()?></p>
    <p>Autor: <?=$P1->getAutor()?></p>
    <p>Formato: <?=$P1->getFormato()?></p>


    <h2>Didatico</h2>
    <p>Titulo: <?= $D1->getTitulo()?></p>
    <p><?= $D1->getDisciplina()?></p>
    <p><?= $D1->getNivel()?></p>


</body>
</html>
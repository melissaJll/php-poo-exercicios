<?php  require_once "src/Livro.php";
// $L1 = new Livro;
// $L1->setTitulo("Anexos");
// $L1->setAutor("Rainbow rowell");
// $L1->setPaginas(200);


require_once "src/Tecnico.php";
$T1 = new Tecnico;

require_once "src/Programacao.php";
$P1 = new Programacao;

$P1->setArea("Web");

require_once "src/Didatico.php";
$D1 = new Didatico;
$D1->setDisciplina("Matemática");


?>

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

    <h2>Dados</h2>
    <p><?=$L1->getTitulo()?></p>
    <p><?=$L1->getAutor()?></p>
    <p><?=$L1->getPaginas()?></p>

    <h2>Técnico</h2>
    <p><?=$T1->getFormato()?></p>

    <h2>Programacao</h2>
    <p><?=$P1->getArea()?></p>

    <h2>Didatico</h2>
    <p><?= $D1->getNivel()?></p>
    <p><?= $D1->getDisciplina()?></p>


</body>
</html>
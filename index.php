<?php  require_once "src/Livro.php";
$L1 = new Livro;
$L1->setTitulo("Anexos");
$L1->setAutor("Rainbow rowell");
$L1->setPaginas(200);
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
</body>
</html>
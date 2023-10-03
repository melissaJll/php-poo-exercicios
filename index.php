<?php  
// $L1 = new Livro;
// $L1->setTitulo("Anexos");
// $L1->setAutor("Rainbow rowell");
// $L1->setPaginas(200);

use Livraria\Didatico;
use Livraria\Programacao;
use Livraria\Tecnico;

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
$D1->setPaginas(179);
$D1->setFormato(["Digital", "Fisico"]);
$D1->setNivel(["Basico","Medio"]);

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

    <h2>Programação</h2>
    <p>Titulo: <?=$P1->getTitulo()?></p>
    <p>Area: <?=$P1->getArea()?></p>
    <p>Número de páginas: <?=$P1->getPaginas()?></p>
    <p>Autor: <?=$P1->getAutor()?></p>
    <p>Formato: <?=$P1->getFormato()?></p>


    <h2>Didático</h2>
    <p>Titulo: <?= $D1->getTitulo()?></p>
    <p>Disciplina: <?= $D1->getDisciplina()?></p>
    <p>Número de páginas: <?= $D1->getPaginas()?></p>

    <!-- Neste caso o get retorna como um array, então para percorrer todos os itens usamos um loop com o $D1->getNivel()=array.
    Econcatenamos com um espaço " "-->
    <p>Número de páginas: 
        <?php 
            foreach($D1->getNivel() as $nivel){
                echo $nivel." ";
            } 
        ?>
    </p>


</body>
</html>
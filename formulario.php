<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
$rid=$_POST['id'];
$rtitulo=$_POST['titulo'];
$rdescricao=$_POST['descricao'];
$rdata=$_POST['data'];
$rresponsavel=$_POST['responsavel'];
$rcategoria=$_POST['categoria'];
}

echo $rid ."<br>";
echo $rtitulo ."<br>";
echo $rdescricao ."<br>";
echo $rdata ."<br>";
echo $rresponsavel ."<br>";
echo $rcategoria;

?>
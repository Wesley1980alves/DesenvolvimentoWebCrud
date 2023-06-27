
<?php

$pdo = new PDO("mysql:host=localhost;dbname=adocaoanimal", "root", "");

//sql para selecionar os registros 
// busca por registros separado

$cmd = $pdo->prepare("SELECT * FROM animal WHERE id = :id");
$cmd->bindvalue(":id", 1);
$cmd->execute();
$resultado = $cmd->fetch(PDO::FETCH_ASSOC);
echo"<br>";
print_r($resultado);
echo"</br>"
?>
<?php
echo " <strong><span style=color:blue;>MOSTRANDO RESULTADO DA TABELA </span></strong> <br> ";


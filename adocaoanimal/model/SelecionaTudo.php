<?php

$pdo = new PDO("mysql:host=localhost;dbname=adocaoanimal", "root", "");
//sql para selecionar os registros 

$resultado_animal = "SELECT * FROM animal ORDER BY id ASC ";

// seleciona os registros 
$resultado = $pdo->prepare($resultado_animal);
$resultado->execute();

while ($rows = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo"<hr>";
    echo"<strong><span style=color:blue;>ID=</span></strong>" . $rows['id'] . "<br>";
    echo"<strong><span style=color:blue;>NOME=</span></strong>" . $rows['nome'] . "<br>";
    echo"<strong><span style=color:blue;>SEXO=</span></strong>" . $rows['sexo'] . "<br>";
    echo"<strong><span style=color:blue;>DESCRIÇÃO=</span></strong>" . $rows['descricao'] . "<br>";
    echo"<strong><span style=color:blue;>HISTÓRICO=</span></strong>" . $rows['historico'] . "<br>";
    echo"<strong><span style=color:blue;>TIPO=</span></strong>" . $rows['tipo'] . "<br>";
    echo"<strong><span style=color:blue;>STATUS ANIMAL=</span></strong>" . $rows['status_animal'] . "<br>";
}
?>

<?php

$id = "2";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=adocaoanimal', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('DELETE FROM animal WHERE id=:id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo $stmt->rowCount();
    echo"<strong><span style=color:darkblue;> A EXCLUSÃO DO ARQUIVO PEDIDO FOI REALIZADA COM SUCESSO|||</span></strong>";
 
} catch (Exception $e) {
    echo"ERROR:" . $e->getMessage();
}

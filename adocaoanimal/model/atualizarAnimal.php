<?php

$id = 1;

$nome = "kira";
try {
    $pdo = new PDO("mysql:host=localhost;dbname=adocaoanimal", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('UPDATE animal SET nome=:nome WHERE id=:id');
    $stmt->execute(array(
        ':id' => $id,
        ':nome' => $nome,
    ));
    echo $stmt->rowCount();
    echo"<stron><span style=color:darkblue;>ATUALIZAÇÃO FOI PROCEDIDA CONFORME SEU COMANDO||</span></strong>";
} catch (Exception $e) {
    echo 'ERROR:' . $e->getMessage();
}
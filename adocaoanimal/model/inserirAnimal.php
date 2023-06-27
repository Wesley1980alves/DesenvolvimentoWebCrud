
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=adocaoanimal', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $inseri = $pdo->prepare("INSERT INTO animal (nome,peso,sexo,descricao,historico,tipo,status_animal)"
            . " VALUES(:nome,:peso,:sexo,"
            . ":descricao,:historico,:tipo,:status_animal)");


 
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
$nome = "Dogue";
$peso = 30.0;
$sexo = "Macho";
$descricao = "Morrom";
$historico = "Vacinado ";
$tipo = "Doberman";
$status = "Agressivo Demais ";

$inseri->bindParam(':nome', $nome);
$inseri->bindParam(':peso', $peso);
$inseri->bindParam(':sexo', $sexo);
$inseri->bindParam(':descricao', $descricao);
$inseri->bindParam(':historico', $historico);
$inseri->bindParam(':tipo', $tipo);
$inseri->bindParam(':status_animal', $status);

if ($inseri->execute()) {
  echo "<strong><span style=color:darkblue;>OS DADOS FORAM REGISTRADO CORRETAMENTE!!!</span></strong>";
} else {
  echo "<strong><span style=color:darblue;>OPS!!! O QUE FOI QUE DEU ERRADO QUE NÃO REGISTROU?????? VAMOS OLHAR?</span></strong>";
}
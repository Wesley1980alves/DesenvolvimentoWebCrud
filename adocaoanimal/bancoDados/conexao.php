<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "adocaoanimal";
$conexao = new mysqli($servidor, $usuario, $senha, $bd);
if ($conexao->connect_errno) {
    die("falha na conexao " . $conexao->connect_errno);
}else{
    echo"conectado ao banco";
}



/* $comando = new PDO("mysql:host=localhost;dbname=adocaoanimal", "root", "");

  try {
  $comando = new PDO("mysql:host=localhost;dbname=adocaoanimal", "root", "");
  $comando->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo' <strong><span style= color:blue;>!!!!!SUA CONEXÃO FOI ESTABELECIDA COM SUCESSO?????? </span></strong> ';
  } catch (Exception $ex) {

  echo'erro' . $ex->getmessage();



  }
 */
?>


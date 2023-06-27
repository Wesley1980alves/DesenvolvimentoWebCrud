<?php

$erros = "";
if (!isset($_POST["nome"]) || !isset($_POST["peso"]) || !isset($_POST["sexo"]) || !isset($_POST["descricao"]) || !isset($_POST["historico"]) || !isset($_POST["tipo"]) || !isset($_POST["status_animal"]) || strlen($_POST["descricao"]) == 0 || strlen($_POST["historico"]) == 0) {

    $erros .= "Todos os campos precisam ser preenchidos!<br>";
}if (!is_numeric($_POST["peso"])) {
    $erros .= "O peso deve ser descrita com numeros!<br>";
}
if ((int) $_POST["peso"] < 0) {
    $erros .= "O peso deve ser descrito lógicamente acima de 0!<br>";
}if (strlen($erros) > 0) {
    echo "Seu Cadastro apresenta os seguintes erros:<br>";
    echo $erros . "<br>";
    header("refresh:5;url=formularioCadastro.php");
}
if (isset($_POST["idOculto"])) {
    require_once "funcoes.php";
    animalAtualizar($_POST["nome"], $_POST["peso"], $_POST["sexo"], $_POST["descricao"], $_POST["historico"], $_POST["status_animal"], $_POST["tipo"], "Não adotado", $_POST["idOculto"]);
    echo "Atualização realizada com sucesso!<br>";
    echo "Você será redirecionado para a página inicial.<br>";
    header("refresh:5;url=Index.php");
} else if (strlen($erros) == 0) {
    require_once "./funcoes.php";
    inserirAnimal($_POST["nome"], $_POST["peso"], $_POST["sexo"], $_POST["descricao"], $_POST["historico"], $_POST["tipo"], $_POST["status_animal"], "Não adotado");
    echo "Cadastro realizado com sucesso!<br>";
    echo "Você será redirecionado para a página inicial.<br>";
    header("refresh:5;url=Index.php");
}
?>
<?php

include_once"../bancoDados/conexao.php";

function inserirAnimal($nome, $peso, $sexo, $descricao, $historico, $tipo, $status_animal) {

    global $conexao;
    $prepara = $conexao->prepare("INSERT INTO animal(nome,peso,sexo,descricao,historico,tipo,status_animal) VALUES (?,?,?,?,?,?,?)");
    $prepara->bind_param("sdsssss", $nome, $peso, $sexo, $descricao, $historico, $tipo, $status_animal);
    $prepara->execute();
}

function animalAtualizar($nome, $peso, $sexo, $descricao, $historico, $tipo, $status_animal, $id) {
    global $conexao;

    $prepara = $conexao->prepare("UPDATE animal SET nome=?,peso=?,sexo=?,descricao=?,historico=?,tipo=?,status_animal=? WHERE id=?");

    $prepara->bind_param("sdsssssi", $nome, $peso, $sexo, $descricao, $historico, $tipo, $status_animal, $id);

    $prepara->execute();
}

function animalExcluir($nome) {
    global $conexao;

    $prepara = $conexao->prepare("DELETE FROM animal WHERE nome=?");

    $prepara->bind_param("s", $nome);

    $prepara->execute();
}

function animalSelecionar($nome) {
    global $conexao;

    $prepara = $conexao->prepare("SELECT * FROM animal WHERE nome=?");

    $prepara->bind_param("i", $nome);

    $prepara->execute();
    $resultado = $prepara->get_result();
    return $resultado->fetch_object();
}

function animalSelecionarTodos() {
    global $conexao;

    $prepara = $conexao->prepare("SELECT * FROM animal");
    $prepara->execute();
    $resultado = $prepara->get_result();
    while ($i = $resultado->fetch_object()) {
        $animais[] = $i;
    }
    return $animais;
}
?>






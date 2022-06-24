<?php

if(isset($_POST['enviarMensagem'])){
    require_once "class/Conexao.php";
    require_once "class/Mensagem.php";

    $msg = new Mensagem();

    $nome = addslashes($_POST['nome']);
    $mensagem = addslashes($_POST['mensagem']);
    $id = addslashes($_POST['usuario_idusuario']);

    if($msg->inserirMensagem($nome, $mensagem, $id)){
        header("Location: view_home.php");
    }else{
        header("Location: view_home.php");
    }
}
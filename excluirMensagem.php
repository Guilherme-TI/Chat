<?php

if(isset($_GET['idmensagem'])){
    require_once "class/Conexao.php";
    require_once "class/Mensagem.php";

    $msg = new Mensagem();
    $id = $_GET['idmensagem'];

    if($msg->excluitMensagem($id)){
        header("Location: view_home.php");
    }else{
        header("Location: view_home.php");
    }
}
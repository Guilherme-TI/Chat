<?php

class Mensagem{
    public function inserirMensagem($nome, $mensagem, $id){
        $sql = "INSERT INTO mensagem (nome, mensagem, usuario_idusuario) VALUES (?,?,?)";
        $stm = Conexao::conectar()->prepare($sql);
        $stm->bindValue(1, $nome);
        $stm->bindValue(2, $mensagem);
        $stm->bindValue(3, $id);
        $stm->execute();
    }
    public function excluitMensagem($id){
        $sql = "DELETE FROM mensagem WHERE idmensagem = ?";
        $stm = Conexao::conectar()->prepare($sql);
        $stm->bindValue(1, $id);
        $stm->execute();
    }
    public function listarMensagem(){
        $sql ="SELECT * FROM mensagem";
        return $query = Conexao::conectar()->query($sql);
    }
}
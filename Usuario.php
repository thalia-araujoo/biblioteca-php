<?php
class Usuario implements OperacoesUsuario {
    private $Idusuario;
    private $senha;
    private $logado = false; //para manter o estado de login

    public function __construct($Idusuario, $senha) {
        $this->Idusuario = $Idusuario;
        $this->senha = $senha;
    }

    public function getIdusuario() {
        return $this->Idusuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function loguin($senhaFornecida) {
        //tem q fazer a verificação
    }

    public function logout() {
       //tem q fazer a verificação
    }

    public function trocarSenha($senhaAnterior, $novaSenha) {
       //temq fazer a verificação
    }
}
?>

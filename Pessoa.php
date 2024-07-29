<?php
class Pessoa{
    private $nome;
    private $cpf;

    public function__construct($nome, $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
    }
}

?>
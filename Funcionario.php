<?php
    class Funcionario{
        private $idFuncionario;
        private $cargo;
        private $livros = array(); //armazenar os livros 

        public function__construct($idFuncionario, $cargo){
            $this->idFuncionario = $idFuncionario;
            $this->cargo = $cargo;
        }

        public function getIdFuncionario(){
            return $this->IdFuncionario;
        }
    
        public function getCargo(){
            return $this->cargo;
        }

        public function cadastrarLivro($livro){

        }

        public function removerLivro($livro){

        }

    }

?>
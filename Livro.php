<?php
class Livro {
    private $Titulo;
    private $Ano;
    private $Autor;

    public function __construct($Titulo, $Ano, $Autor) {
        $this->Titulo = $Titulo;
        $this->Ano = $Ano;
        $this->Autor = $Autor;
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function getAno() {
        return $this->Ano;
    }

    public function getAutor() {
        return $this->Autor;
    }
}
?>

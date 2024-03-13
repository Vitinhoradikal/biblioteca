<?php 

namespace biblioteca;

class livro{
    private $titulo;
    private $autor;
    private $edicao;

    public function __construct($titulo, $autor, $edicao)    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->edicao = $edicao;   
    }

    #getters
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }

    public function getEdicao(){
        return $this->edicao;
    }

    #setters
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function setEdicao($edicao){
        $this->edicao = $edicao;
    }
}
?>
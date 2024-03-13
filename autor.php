<?php 

namespace biblioteca;

class Autor extends Usuario{
    private $genero;

    public function __construct($codUser, $nome, $dataNascimento, $endereco, $genero) {
        parent::__construct($codUser, $nome, $dataNascimento, $endereco);
        $this->genero = $genero;
    }
    #getters
    public function getGenero(){
        return $this->genero;
    }
    #setter
    public function setGenero($genero){
        $this->genero = $genero;
    }
}    
?>
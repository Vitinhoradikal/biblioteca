<?php 

namespace biblioteca;

class Usuario{
    private $codUser;
    private $nome;
    private $dataNascimento;
    private $endereco;
   

    public function __construct($codUser, $nome, $dataNascimento,$endereco){
        $this->codUser = $codUser;
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->endereco = $endereco; 
        
    }

   #getters
    public function getCodUser(){
        return $this->codUser;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    

    #setters
    public function setCodUser($codUser){
        $this->codUser = $codUser;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setdataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
   
    public function cadastraUsuario($codUser, $nome, $dataNascimento, $endereco){
    
        $usuario = new Usuario($codUser,$nome, $dataNascimento, $endereco);
        return $usuario;
    
    }  


}

?>
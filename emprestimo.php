<?php 

namespace biblioteca;

class Emprestimo{
    private $codEmprestimo;
    private $codLivro;
    private $codUsuario;
    private $dataEmprestimo;
    private $prevDevolucao;

    public function __construct($codEmprestimo, $codLivro, $codUsuario, $dataEmprestimo, $prevDevolucao){
        $this->codEmprestimo = $codEmprestimo;
        $this->codLivro = $codLivro;
        $this->codUsuario = $codUsuario;
        $this->dataEmprestimo = $dataEmprestimo;
        $this->prevDevolucao = $prevDevolucao;
    }


#getters
    public function getCodEmprestimo(){
        return $this->codEmprestimo;
    }
    public function getCodLivro(){
        return $this->codLivro;
    }
    public function getCodUsuario(){
        return $this->codUsuario;
    }
    public function getDataEmprestimo(){
        return $this->dataEmprestimo;
    }
    public function getPrevDevolucao(){
        return $this->prevDevolucao;
    }

#setters
    public function setCodEmprestimo($codEmprestimo){
        $codEmprestimo = $this->codEmprestimo;
    } 
    public function setCodLivro($codLivro) {
        $codLivro = $this->codLivro;        
    }
    public function setCodUsuario($codUsuario){
        $codUsuario = $this->codUsuario;
    }
    public function setDataEmprestimo($dataEmprestimo){
        $dataEmprestimo = $this->dataEmprestimo;
    }
    public function setPrevDevolucao($prevDevolucao){
        $prevDevolucao = $this->prevDevolucao;
    }
}
?>
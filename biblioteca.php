<?php

namespace biblioteca;

require_once 'usuario.php';
require_once 'livro.php';
require_once 'autor.php';
require_once 'emprestimo.php';

$usuario = new Usuario(1,"vitor", "23/04/1988", "chico reis");

echo($usuario->getNome()."<hr>");

#print_r($usuario);

$autor = new Autor(2,"isabel","24/09/1981","chico reis", true);

echo($autor->getGenero()."<hr>");

echo($autor->getNome()."<hr>");

$emprestimo = new Emprestimo(1,1,1,"12/03/2024","19/03/2024");

var_dump($emprestimo->getDataEmprestimo());




?>
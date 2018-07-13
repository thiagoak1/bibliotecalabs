<?php 
ini_set("display_errors","on");
require_once 'livro.php';
require_once 'LivroClasse.php';

	
	$livro = new Livro;

	$livro->setTitulo        ($_POST['titulo']);
	$livro->setPublicacaoData($_POST['publicacaoData']);
	$livro->setAutor         ($_POST['autor']);
	$livro->setGenero        ($_POST['genero']);
	$livro->setEditor        ($_POST['editor']);
	
	$resultado = $livro->insert();
	
 if($resultado)
 	{ 
     echo "Cadastro realizado com sucesso!";    
    }

var_dump($resultado);
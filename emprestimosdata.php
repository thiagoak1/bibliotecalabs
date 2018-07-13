<?php
require_once 'conexao.php';
require_once 'EmprestimoClasse.php';
require_once 'emprestimosClasse.php';
$emprestimo = new Emprestimo;

	$emprestimo->setEmprestimoData ($_POST['dataEmprestimo']);
	$emprestimo->setRetornoData    ($_POST['dataDevolucao']);
	$emprestimo->setStatus         ($_POST['status']);
	$emprestimo->setUsuario		   ($_POST['usuario']);
	$emprestimo->setCliente		   ($_POST['leitor']);
	$emprestimo->setLivros 		   ($_POST['livro']);

	$resultado = $emprestimo->insert();

	if($resultado)
	{

	echo 'operação realizada com sucesso!';
	}

	header('Location:emprestimos.php');



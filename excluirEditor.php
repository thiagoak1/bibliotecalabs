<?php  
	ini_set("display_errors","on");
	require_once 'EditorClasse.php';
	require_once 'selecionarEditor.php';

	$editor = new Editor;
	$editor->setId($_GET['id']);
	$r = $editor->excluir();
if($r)
	{
	echo 'Editor excluido com sucesso !';
	}
else
	{
	echo 'Não foi possivel excluir editor! chame o cara do T.I!!';
	}
header('Location:selecionarEditor.php');


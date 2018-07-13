<?php  
ini_set("display_errors","on");
require_once 'EditorClasse.php';
require_once 'editorPagina.php';
	
	$editor = new Editor;

	$editor->setNome($_POST['nome']);
	$resultado   = $editor->insert();
 if($resultado)
 	{ 
     echo "Cadastro realizado com sucesso!";    
    }


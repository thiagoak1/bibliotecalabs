<?php 
require_once 'conexao.php';


class Genero
	{
		protected $nome;
		protected $id;

public function setId($id)
	{
		$this->id = $id;
	}
public function setNome($nome)
	{
		$this->nome = $nome;
	}
public function insert()
	{
		$sql     = "INSERT INTO genres (name) values (?)";
		$insert  = Conexao :: getInstance()->prepare($sql);
		$insert->bindParam(1,$this->nome);
		return $insert->execute();
		
	}
public function alterar()
	{
		$sql     = "UPDATE genres set name WHERE id = (?)";
		$alterar = Conexao :: getInstance()->prepare($sql);
		$alterar->bindParam(1,$this->name);
		return $alterar->execute(); 
	}
public function select()
	{	
		$sql = "SELECT * FROM genres";
		$select = Conexao :: getInstance()->prepare($sql);
		return $select->execute();
	}
public function selectOne()
	{	
		$sql = "SELECT * FROM genres where id=(?)";
		$selectOne = Conexao :: getInstance()->prepare($sql);
		$selectOne->binParam(1,$this->id);
		return $selectOne->execute();
	}
public function excluir()
	{
		$sql = "DELETE FROM genres where id  = (?)";
		$excluir = Conexao :: getInstance()->prepare($sql);
		$selectOne->binParam(1,$this->id);
		return $selectOne->execute();
	}
}
<?php
require_once 'conexao.php';

class Autor 
		{
			
			protected $nome;
			protected $id;

	public function __construct() 
		{
			$this->conexao = new Conexao;
		}
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
			$this->insert = "INSERT INTO authors (name) values ('$this->nome')";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->insert);
			return $this->retorno;
		}
	public function alterar()
		{
			$this->alterar = "UPDATE authors set name = '$this->nome' WHERE id = '$this->id'";				 
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->alterar);
			return $this->retorno;
		}
	public function select()
		{	
			$this->select = "SELECT * FROM authors";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}

			public function selectOne()
		{	
			$this->select = "SELECT * FROM authors where id=$this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}

	public function excluir()
		{
			$this->excluir = "DELETE FROM authors where id  = $this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->excluir); 
			return $this->retorno;
		}
}
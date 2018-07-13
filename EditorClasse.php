<?php 
require_once 'conexao.php';

class Editor 
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
			$this->insert = "INSERT INTO publishers (name) values ('$this->nome')";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->insert);
			return $this->retorno;
		}
	public function alterar()
		{
			$this->alterar = "UPDATE publishers set name = '$this->nome' WHERE id = '$this->id'";				 
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->alterar);
			return $this->retorno;
		}
	public function select()
		{	
			$this->select = "SELECT * FROM publishers";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}

			public function selectOne()
		{	
			$this->select = "SELECT * FROM publishers where id=$this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}

	public function excluir()
		{
			$this->excluir = "DELETE FROM publishers where id  = $this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->excluir); 
			return $this->retorno;
		}
}
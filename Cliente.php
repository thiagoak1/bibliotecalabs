<?php 
require_once 'conexao.php';

	class Cliente 
		{
			protected $id;
			protected $nome;
			protected $cpf;
		
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
	public function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}
	public function insert()
		{
			$this->insert = "INSERT INTO readers (name,cpf) values ('$this->nome','$this->cpf')";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->insert);
			return $this->retorno;
		}
	public function alterar()
		{
			$this->alterar = "UPDATE readers set name = '$this->nome' , cpf = '$this->cpf' WHERE id = '$this->id'";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->alterar);
			return $this->retorno;
		}
	public function select()
		{	
			$this->select = "SELECT * FROM readers";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}

			public function selectOne()
		{	
			$this->select = "SELECT * FROM readers where id=$this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}

	public function excluir()
		{
			$this->excluir = "DELETE FROM readers where id  = $this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->excluir); 
			return $this->retorno;
		}
}
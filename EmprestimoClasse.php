<?php 
require_once 'conexao.php';

	class Emprestimo
		{
			protected $id;
			protected $emprestimoData;
			protected $retornoData;
			protected $status;
			protected $usuario;
			protected $cliente;
			protected $cancelamentoData;
			protected $devolucaoEfetuadaData;
			protected $livros;
		
	public function __construct() 
		{
			$this->conexao = new Conexao;
		}
	public function setId($id)
		{
			$this->id = $id;
		}
	public function setEmprestimoData($emprestimoData)
		{
			$this->emprestimoData = $emprestimoData;
		}
	public function setRetornoData($retornoData)
		{
			$this->setretornoData = $retornoData;
		}
	public function setStatus($status)
		{
			$this->status = $status;
		}
	public function setUsuario($usuario)
		{
			$this->usuario = $usuario;
		}
	public function setCliente($cliente)
		{
			$this->cliente = $cliente;
		}
	public function setCancelamentoData($cancelamentoData)
		{
			$this->cancelamentoData = $cancelamentoData;
		}
	public function setDevolucaoEfetuadaData($devolucaoEfetuadaData)
		{
			$this->devolucaoEfetuadaData = $devolucaoEfetuadaData;
		}
	public function setLivros($livros)
		{
			$this->livros = $livros;
		}
	public function insert()
		{
			$this->insert = "INSERT INTO loans (loan_date,return_date,status_id,user_id,reader_id,books_id) values ('$this->emprestimoData','$this->retornoData','$this->status','$this->usuario','$this->cliente','$this->livros')";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->insert);
			return $this->retorno;
		}
	public function alterar()
		{
			$this->alterar = "UPDATE loans set loan_date = '$this->emprestimoData',return_date = '$this->retornoData',status_id = '$this->status',user_id = '$this->usuario',reader_id = '$this->cliente',books_id = '$this->livros' WHERE id = '$this->id'";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->alterar);
			return $this->retorno;
		}
	public function select()
		{	
			$this->select = "SELECT * FROM loans";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}
			public function selectOne()
		{	
			$this->select = "SELECT * FROM loans where id=$this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}
	public function excluir()
		{
			$this->excluir = "DELETE FROM loans where id  = $this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->excluir); 
			return $this->retorno;
		}

	} 
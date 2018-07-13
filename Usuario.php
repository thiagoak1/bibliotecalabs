<?php
require_once 'conexao.php';

	class Usuario
	{
		protected $id;
		protected $nome;
		protected $cpf;
		protected $dataNascimento;
		protected $email;
		protected $password;
		protected $conexao;
		protected $insert;
		protected $retorno;
		protected $alterar;
		protected $select;
		protected $excluir;

		public function __construct() //issu eh pra criar construtor
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

		public function setDataNascimento($dataNascimento)
		{
			$this->dataNascimento = $dataNascimento;
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function setPassword($password)
		{
			$this->password = $password;
		}

		public function insert()
		{
			$this->insert = "INSERT INTO users(name,cpf,birth_date,email,password) values 
			('".$this->nome."','".$this->cpf."','".$this->dataNascimento."','".$this->email."','".$this->password."')";

			$this->retorno = mysqli_query($this->conexao->conectar(),$this->insert);
			return $this->retorno;
		}

		public function alterar()
		{
			$this->alterar = 'UPDATE users set name = "'.$this->nome.'" , cpf = "'.$this->cpf.'"
			,birth_date = "'.$this->dataNascimento.'",email = " '.$this->email.'",password = " '.$this->password.'" WHERE 	id =  "'.$this->id.'"';
			
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->alterar);
			return $this->retorno;
		}

		public function select()
		{	
			$this->select = "SELECT * FROM users";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;

		}

		public function selectOne()
		{
			$this->select = "SELECT * FROM users where id = $this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}

		public function excluir()
		{

			$this->excluir = "DELETE FROM users where id  = $this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->excluir); 
			return $this->retorno;


		}



	}

?>

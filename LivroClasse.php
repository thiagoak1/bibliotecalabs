<?php 
require_once 'conexao.php';

	class Livro
		{
			protected $id;
			protected $titulo;
			protected $publicacaoData;
			protected $autor;
			protected $genero;
			protected $editor;
		
	
	public function setId($id)
		{
			$this->id = $id;
		}
	public function setTitulo($titulo)
		{
			$this->titulo = $titulo;
		}
	public function setPublicacaoData($publicacaoData)
		{
			$this->publicacaoData = $publicacaoData;
		}
	public function setAutor($autor)
		{
			$this->autor = $autor;
		}
	public function setGenero($genero)
		{
			$this->genero = $genero;
		}
	public function setEditor($editor)
		{
			$this->editor = $editor;
		}

	public function insert()
		{
			$this->insert = "INSERT INTO books (title,publication_date,author_id,genre_id,publisher_id) values ('$this->titulo','$this->publicacaoData','$this->autor','$this->genero','$this->editor')"; 
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->insert);
			return $this->retorno;
		}
	public function alterar()
		{
			$this->alterar = "UPDATE books set title = $this->titulo','publication_date = $this->publicacaoData','author_id = $this->autor','genre_id = $this->genero','publishers_id = $this->editor WHERE id = '$this->id'";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->alterar);
			return $this->retorno;
		}
	public function select()
		{	
			$this->select = "SELECT * FROM books";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}
			public function selectOne()
		{	
			$this->select = "SELECT * FROM books where id=$this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->select);
			return $this->retorno;
		}
	public function excluir()
		{
			$this->excluir = "DELETE FROM books where id  = $this->id";
			$this->retorno = mysqli_query($this->conexao->conectar(),$this->excluir); 
			return $this->retorno;
		}

	} 
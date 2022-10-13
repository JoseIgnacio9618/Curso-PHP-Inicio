<?php
class Recurso
{
	private $registro;
	private $titulo;
	private $anyo;
	private $idioma;
	private $prestado;
	
	public function __construct($registro, $titulo, $anyo, $idioma)
	{
		$this->registro = $registro;
		$this->titulo = $titulo;
		$this->anyo = $anyo;
		$this->idioma = $idioma;
		$this->prestado = FALSE;
	}
	
	public function prestar()
	{
		$this->prestado = TRUE;
	}
	public function devolver()
	{
		$this->prestado = FALSE;
	}
}

class Libro
{
	private $autor;
	private $editorial;
	private $reservado;
	
	public function __construct($registro, $titulo, $anyo, $idioma, $autor, $editorial)
	{
		
		$this->autor = $autor;
		$this->editorial = $editorial;
		$this->reservado = FALSE;
	}
	
	public function reservar()
	{
		$this->reservado = TRUE;
	}
	public function prestar()
	{
		if ($this->reservado)
			$this->reservado = FALSE;
		parent::prestar();
	}
	public function devolver()
	{
		if ($this->reservado)
			echo "El libro está reservado.";
		parent::devolver();
	}
}

class Video
{
	private $director;
	private $productor;
	private $sistema;
	
	public function __construct($registro, $titulo, $anyo, $idioma, $director, $productor, $sistema)
	{
		
		$this->director = $director;
		$this->productor = $productor;
		$this->sistema = $sistema;
	}
}
?>
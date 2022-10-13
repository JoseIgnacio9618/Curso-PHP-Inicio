<?php
class Ccorriente
{
	//Propiedades
	var $numCuenta;
	var $nifTitular;
	var $fechaAlta;
	var $saldo;
	var $interes;

	//Constructor
   function __construct($Numero, $Nif, $Fecha, $Interes)
  {
	$this->numCuenta = $Numero;
	$this->nifTitular = Nif;
	$this->fechaAlta = $Fecha;
	$this->saldo = 0;
	$this->interes = $Interes;
  }

	//Métodos
  function cargar($cantidad, $fecha, $concepto)
  {
	$this->saldo -= $cantidad;
	return $this->saldo;
  }
  function abonar($cantidad, $fecha, $concepto)
  {
	$this->saldo += $cantidad;
	return $this->saldo;
  }
}
?>
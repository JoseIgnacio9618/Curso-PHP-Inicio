<?php

    //Asi se declara una funcion 
	function multiplicar($n1, $n2){
		return $n1 * $n2;
	}

    //is_numeric devuelve true si es numero 
	function esNumero($n1, $n2){
		if(is_numeric($n1) && is_numeric($n2)){
			return true;
		}else{
			return false;
		}
	}

	function mostrarError(){
		echo "<span class='error'>Ingresa solo números</span>";
	}

    //Asi se llama a una funcion dentro de otra funcion que estamos declarando. 
	function validarCampos(){
		if(isset($_POST['numero01']) && isset($_POST['numero02'])){
			$n1 = $_POST['numero01'];
			$n2 = $_POST['numero02'];

			if(esNumero($n1, $n2)){
				echo multiplicar($n1, $n2);
			}else{
				mostrarError();
			}
		}
	}






?>
<?php

	// Simple funcion para comprobar DNI, NIE
	function comprobar_documento_identificacion($dni) 
	{
		if(strlen($dni) < 9) 
		{
			return "DNI demasiado corto.";
		}
		
		$dni 	= strtoupper($dni);	 
		$letra 	= substr($dni, -1, 1);
		$numero = substr($dni, 0, 8);
		
		// Si es un NIE hay que cambiar la primera letra por 0, 1 ó 2 dependiendo de si es X, Y o Z.
		$numero = str_replace(array('X', 'Y', 'Z'), array(0, 1, 2), $numero);	
		
		$modulo 		= $numero % 23;
		$letras_validas = "TRWAGMYFPDXBNJZSQVHLCKE";
		$letra_correcta = substr($letras_validas, $modulo, 1);
		
		if($letra_correcta != $letra) 
		{
			return "Letra incorrecta, la letra deber&iacute;a ser la $letra_correcta.";
		}
		else 
		{
			return "OK";
		}
	}
?>

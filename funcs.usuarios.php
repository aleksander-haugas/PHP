<?php
/*
* 	Validación de registro del usuario.
* 	Version: 0.9.0 beta
* 	Copyright (c) 2013 Aleksander Haugas
*
* 	Licensed under the MIT license:
* 	http://www.opensource.org/licenses/mit-license.php
*/

	/*
	* Simple funcion para comprobar DNI, NIE
	* Retorna verdadero o falso y calcula la letra
	*/
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
	
	/*
	* Funcion para comprobar cuentas de correo temporales
	* Esta funcion permite elegir si queremos o no permitir
	* el registro del usuario con estas cuentas
	*/
	function comprobar_email_temporal($email)
	{      
		if(in_array(stristr($email, '@'), 
			array('@yopmail.com', 
			'@yopmail.fr',
			'@yopmail.net',
			'@cool.fr.nf',
			'@jetable.fr.nf',
			'@nospam.ze.tc',
			'@nomail.xl.cx',
			'@mega.zik.dj',
			'@speed.1s.fr',
			'@courriel.fr.nf',
			'@moncourrier.fr.nf',
			'@monemail.fr.nf',
			'@monmail.fr.nf',
			'@ypmail.webarnak.fr.eu.org',
			'@rtrtr.com', 
			'spamfree24.org', 
			'@spambox.us', 
			'@guerrillamailblock.com', 
			'@sharklasers.com', 
			'@guerrillamail.com', 
			'@guerrillamail.net', 
			'@guerrillamail.biz', 
			'@guerrillamail.org', 
			'@guerrillamail.de', 
			'@spammotel.com', 
			'@nowmymail.com', 
			'@tempemail.net', 
			'@mailinator.com', 
			'@mailmetrash.com', 
			'@thankyou2010.com', 
			'@trash2009.com', 
			'@mt2009.com', 
			'@trashymail.com', 
			'@mytrashmail.com', 
			'@mierdamail.com', 
			'@bugmenot.com', 
			'@jetable.org', 
			'@mailexpire.com', 
			'@mailnull.com', 
			'@spamcero.com', 
			'@spaml.com', 
			'@tempemail.com', 
			'@explodemail.com', 
			'@ae.mintemail.com', 
			'@mintemail.com', 
			'@pookmail.com'))) 
	
		return true;      
	}
?>

<?php
/*
* 	Código de validación con expresiones regulares Validate.
* 	Version: 0.9.0 beta
* 	Copyright (c) 2013 Aleksander Haugas
*
* 	Licensed under the MIT license:
* 	http://www.opensource.org/licenses/mit-license.php
*
*
*
*	Códigos Postales:
* 	http://en.wikipedia.org/wiki/List_of_postal_codes
*
*	IBAN:
*	http://en.wikipedia.org/wiki/International_Bank_Account_Number
*/

class RegExpUtils
{
	public $salida	= true;	// Mostramos salida en texto
	public $debug 	= true;	// Mostramos errores (Modo desarrollo)

	public function RegExpUtils()
	{
		// ALGO...
		if ($this->debug == true)
		{
			ini_set('display_errors', 1);
			ini_set('error_reporting', E_ALL);
		}
		else
		{
			ini_set('display_errors', 0);
		}
	}	
	
	/*
	* Una funcion simple para extraer, comprobar o validar datos.
	* Se puede retornar una salida de datos y también (verdadero o falso)
	*
	* %m1% - Los marcadores dinámicos que se sustituyen en tiempo de ejecución por el índice correspondiente.
	*/ 
	public function consultar_expresion($expresion, $string)
	{		
		//Ensure we have something to return
		if ($expresion == "")
		{
			return ("No se ha encontrado expresion regular.");
		}
		
		// Comprobamos si "String" no es nulo o está vacío	
		if ($string == "")
		{
			return ("No hay nada que hacer.");
		}
		else
		{
			$resultado 	= array ();
			$tamanio 	= count($string);

			for ($x = 0; $x < $tamanio; $x++)
			{			
				if (preg_match_all($this->expresion($expresion), $string[$x], $result))
				{
					$resultado[] = $result[0][0];
					unset($result);
				}
			}

			return $resultado;
		}

		return false;
	}
	
	/*
	* Una funcion simple para listar las opciones disponibles de expresiones regulares.
	* Se pueden añadri o quitar expresiones regulares según la necesidad.
	*/ 
	private function expresion($tipo)
	{
		// Definimos la matriz
		$patron = array();

		// NUMÉRICOS
		$patron = array_merge($patron,array(
		"NUMEROS_01" => "/^[0-9]*$/",		// Sólo cadena vacía o números
		"NUMEROS_02" => "/^[0-9]+$/",		// Sólo números. No se admite cadena vacía
		));

		// ALFABÉTICOS
		$patron = array_merge($patron,array(
		"ALFA_01" => "/^[a-z\s]+$/",         	// Sólo letras en minúsculas, y espacios
		"ALFA_02" => "/^[a-z]+$/",         	// Sólo letras en minúsculas. No se admite cadena vacía
		"ALFA_03" => "/^[A-Z\s]+$/",         	// Sólo letras en mayúsculas, y espacios
		"ALFA_04" => "/^[A-Z]+$/",         	// Sólo letras en mayúsculas. No se admite cadena vacía
		"ALFA_04" => "/^[a-zA-Z\s]+$/",       	// Sólo letras en mayúsculas/minúsculas, y espacios
		"ALFA_06" => "/^[a-zA-Z]+$/",		// Sólo letras en mayúsculas/minúsculas. No se admite cadena vacía
		));

		// ALFANUMÉRICOS
		$patron = array_merge($patron,array(
		"ALFA_NUM_01" => "/^[0-9a-z\s]+$/",			// Sólo letras en minúsculas, números y espacios
		"ALFA_NUM_02" => "/^[0-9a-z]+$/",         		// Sólo letras en minúsculas y números. No se admite cadena vacía
		"ALFA_NUM_03" => "/^[0-9A-Z\s]+$/",       		// Sólo letras en mayúsculas, números y espacios
		"ALFA_NUM_04" => "/^[0-9A-Z]+$/",       		// Sólo letras en mayúsculas y números. No se admite cadena vacía
		"ALFA_NUM_05" => "/^[0-9a-zA-Z\s]+$/",    		// Sólo letras en mayúsculas/minúsculas, números y espacios
		"ALFA_NUM_06" => "/^[0-9a-zA-Z]+$/",      		// Sólo letras en mayúsculas/minúsculas y números. No se admite cadena vacía
		"ALFA_NUM_07" => "/^[a-zA-Z0-9 áéíóúAÉÍÓÚÑñ]+$/",	// ALFANUMÉRICO CON VOCALES CON TILDES Y ESPACIOS		
		"ALFA_NUM_08" => "/^[a-z0-9-]*[a-z-]+[a-z0-9-]*$/", 	// ALFANUMÉRICO SIN VOCALES CON TILDES Y ESPACIOS
		));	

		// FECHA Y HORA
		$patron = array_merge($patron,array(
		"FECHA_DD_MM_YYYY" => "/^\d{2}\/\d{2}\/\d{4}$/",							// [DD/MM/YYYY]
		"FECHA_MM_DD_YYYY" => "/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/", 		// [MM/DD/YYYY]		
		"FECHA_YYYY_MM_DD" => "#^((19|20)?[0-9]{2}[- /.](0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01]))*$#",	// [YYYY/MM/DD]
		"HORA_24" => "/^(0[1-9]|1\d|2[0-3]):([0-5]\d):([0-5]\d)$/",						// HORA 23:59:59
		));			

		// CÓDIGOS POSTALES
		$patron = array_merge($patron,array(
		"POSTAL_DE" => "/[0-9]{5,5}$/",								// Alemania
		"POSTAL_ES" => "/^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/",				// España	
		"POSTAL_US" => "/^([0-9]{5})(-[0-9]{4})?$/i",						// Estados Unidos
		"POSTAL_CA" => "/\A[A-Z]\d[A-Z]-\d[A-Z]\d\z/",						// Canadá
		"POSTAL_GB" => "/^([A-Z]{1,2}[0-9][A-Z0-9]? [0-9][ABD-HJLNP-UW-Z]{2})*$/",		// Reino Unido	
		"POSTAL_JP" => "/^[0-9]{3}-[0-9]{4}$/",							// Japon
		"POSTAL_FR" => "/^(F-)?((2[A|B])|[0-9]{2})[0-9]{3}$/",					// Francia	
		"POSTAL_IT" => "/^(V-|I-)?[0-9]{4}$/",							// Italia	
		"POSTAL_AT" => "/^[0-9]{4,4}$/",							// Austria	
		"POSTAL_NL" => "/^[0-9]{4,4}\s[a-zA-Z]{2,2}$/",						// Holanda
		"POSTAL_DK" => "/^([D-d][K-k])?( |-)?[1-9]{1}[0-9]{3}$/",				// Dinamarka
		"POSTAL_SE" => "/^[a-zA-Z]{2}-[0-9]{3}\s[0-9]{2}$/",					// Suecia
		"POSTAL_BE" => "/^[1-9]{1}[0-9]{3}$/",							// Belgica
		"POSTAL_AR" => "/^[0-9]{4,4}$/",							// Argentina
		"POSTAL_AU" => "/^[0-9]{4}/",								// Australia
		"POSTAL_BR" => "/^([0-9]{1})([0-9]{1})([0-9]{1})([0-9]{1})([0-9]{1})-?([0-9]{3})$/",	// Brasil
		"POSTAL_EE" => "/^[0-9]{5,5}$/",							// Estonia
		"POSTAL_PT" => "/^[0-9]{4,4}$/",							// Portugal
		));			

		// TARJETAS DE CRÉDITO Y DÉBITO
		$patron = array_merge($patron,array(
		"TARJETA_AMERICAN_EXPRESS"	=> "/^(3[47][0-9]{13})*$/",				// Tarjeta de crédito American Express
		"TARJETA_DINERS_CLUB" 		=> "/^(3(?:0[0-5]|[68][0-9])[0-9]{11})*$/",		// Tarjeta de crédito Diner's Club
		"TARJETA_MASTERCARD"		=> "/^(5[1-5][0-9]{14})*$/",				// Tarjeta de crédito MasterCard
		"TARJETA_VISA" 			=> "/^(4[0-9]{12}(?:[0-9]{3})?)*$/",			// Tarjeta de crédito Visa
		"TARJETA_DISCOVER" 		=> "/^6(?:011|5[0-9]{2})[0-9]{12}$/",			// Tarjeta de crédito Discover
		"TARJETA_JCB" 			=> "/^(?:2131|1800|35\d{3})\d{11}$/",			// Tarjeta de crédito JCB
		"TARJETA_ENROUTE" 		=> "/^2(014|149)[0-9]{11}$/",				// Tarjeta de crédito enROUTE
		"TARJETA_CARTE_BLANCHE" 	=> "/^3(0[0-5][0-9]{11}|[68][0-9]{12})$/",		// Tarjeta de crédito Carte Blanche
		"TARJETA_SWITCH" 		=> "/^6759d{12}(d{2,3})?$/",				// Tarjeta de débito Switch
		"TARJETA_SOLO" 			=> "/^6767d{12}(d{2,3})?$/",				// Tarjeta de débito Solo
		"TARJETA_DANKORT" 		=> "/^5019d{12}$/",					// Tarjeta de débito Dankort
		"TARJETA_MAESTRO" 		=> "/^(5[06-8]|6d)d{10,17}$/",				// Tarjeta de débito Maestro
		"TARJETA_FORBRUGSFORENINGEN" 	=> "/^600722d{10}$/",					// Tarjeta de débito Forbrugsforeningen
		"TARJETA_LASER" 		=> "/^(6304|6706|6771|6709)d{8}(d{4}|d{6,7})?$/",	// Tarjeta de débito Laser
		));
		
		// IBAN
		$patron = array_merge($patron,array(
		"IBAN_DE" 	=> "/DE\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{2}|DE\d{20}/",		// IBAN Alemania
		"IBAN_ES" 	=> "/ES\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|ES\d{22}/",		// IBAN España
		"IBAN_SK" 	=> "/SK\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|SK\d{22}/",		// IBAN Eslovakia
		"IBAN_AD" 	=> "/AD\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|AD\d{22}/",		// IBAN Andorra
		"IBAN_SE" 	=> "/SE\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|SE\d{22}/",		// IBAN Suecia
		"IBAN_CH" 	=> "/CH\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{1}|CH\d{19}/",		// IBAN Suiza
		"IBAN_PL" 	=> "/PL\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|PL\d{26}/",	// IBAN Polonia
		"IBAN"		=> "[a-zA-Z]{2}[0-9]{2}[a-zA-Z0-9]{4}[0-9]{7}([a-zA-Z0-9]?){0,16}",		// IBAN en general
		));
		
				
		// SEGURIDAD SOCIAL
		$patron = array_merge($patron,array(
		"SEGURIDAD_SOCIAL_US" => "/^\d{3}\-\d{2}\-\d{4}$/",													// Estados Unidos
		"SEGURIDAD_SOCIAL_CN" => "/^\d{17}[\d|X]|\d{15}$/",													// China
		"SEGURIDAD_SOCIAL_FR" => "/^((\d(\x20)\d{2}(\x20)\d{2}(\x20)\d{2}(\x20)\d{3}(\x20)\d{3} ((\x20)\d{2}|))|(\d\d{2}\d{2}\d{2}\d{3}\d{3}(\d{2}|)))$/",	// Francia
		));

		// TELÉFONOS
		$patron = array_merge($patron,array(
		"TELEFONO_DE" 	=> "((\(0\d\d\) |(\(0\d{3}\) )?\d )?\d\d \d\d \d\d|\(0\d{4}\) \d \d\d-\d\d?)",	// Teléfono Alemania
		"TELEFONO_US" 	=> "((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}",					// Teléfono Estados Unidos
		"TELEFONO_CN" 	=> "(\(\d{3}\)|\d{3}-)?\d{8}",							// Teléfono China
		"TELEFONO_JP" 	=> "(0\d{1,4}-|\(0\d{1,4}\) ?)?\d{1,4}-\d{4}",					// Teléfono Japon
		"TELEFONO_FR" 	=> "(0( \d|\d ))?\d\d \d\d(\d \d| \d\d )\d\d",					// Teléfono Francia
		"TELEFONO_ES" 	=> "/^[9|8|6|7][0-9]{8}$/",							// Teléfono España
		"TELEFONO"	=> "^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$",		// Teléfonos en general
		));

		// DOCUMENTO DE IDENTIDAD
		$patron = array_merge($patron,array(
		"DOC_ID_NIF_ES" => "/^[0-9]{7,8}[A-Z]$/",					     			     	// NIF España
		"DOC_ID_NIF_FR" => "/^([0-9a-zA-Z]{12})$/",								     	// NIF Francia
		"DOC_ID_NIF_IT" => "/^([0-9a-zA-Z]{12})$/",								     	// NIF Italia
		"DOC_ID_PAS_FR" => "/^([a-zA-Z]{2})\s([0-9]{7})$/",							     	// Pasaporte Francia
		"DOC_ID_CIF_IT" => "/^[A-Za-z]{6}[0-9]{2}[A-Za-z]{1}[0-9]{2}[A-Za-z]{1}[0-9]{3} [A-Za-z]{1}$/",	     		// CIF Italia
		"DOC_ID_CIF_ES" => "/^(X(-|\.)?0?\d{7}(-|\.)?[A-Z]|[A-Z](-|\.)?\d{7}(-|\.)? [0-9A-Z]|\d{8}(-|\.)?[A-Z])$/",	// CIF España		
		));

		// ID DE VIDEOS MULTIMEDIA
		$patron = array_merge($patron,array(
		"ID_VIDEO_YOUTUBE" 	=> "#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=embed/)[^&\n]+|(?<=v=)[^&\‌​n]+|(?<=youtu.be/)[^&\n]+#",	// YouTube
		"ID_VIDEO_VIMEO" 	=> "/^(http|https):\/\/(www\.)?vimeo\.com\/(clip\:)?(\d+).*$/",							// Vimeo
		"ID_VIDEO_METACAFE" 	=> "/(((http|https):\/\/)?(www\.)?metacafe\.com)(\/watch\/)(\d+)(.*)/i",					// Metacafe
		));

		// MISCELÁNEA	
		$patron = array_merge($patron,array(	
		"EMAIL" 			=> "/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/",		 // Comprobar correo electrónico
		"URL_FTP" 			=> "/^(ht|f)tp(s?)\:\/\/[0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*(:(0-9)*)*(\/?)( [a-zA-Z0-9\-\.\?\,\'\/\\\+&%\$#_]*)?$/",// Verificar si es URL o FTP
		"COLORES_HEX" 			=> "/^#(?:(?:[a-f\d]{3}){1,2})$/i",										 // Comprobar colores hexadecimales
		"ENLACES_A"			=> "/\<a(.*)\>(.*)\<\/a\>/i",											 // Encontrar enlaces web
		"COMENTARIOS_MULTILINEA" 	=> "#/\*[^*]*\*+([^/][^*]*\*+)*/#",										 // Comentarios multilineas
		"IMAGEN_WEB" 			=> "#^(http|https):\/\/(.*)\.(gif|png|jpg)$#i",									 // Comprueba si es una imagen
		"CADENA_SERIALIZADA" 		=> "/(a|O|s|b)\x3a[0-9]*?((\x3a((\x7b?(.+)\x7d)|(\x22(.+)\x22\x3b)))|(\x3b))/",					 // Comprueba si la cadena está serializado
		"CADENA_IMG" 			=> "/<img src=\"(.*?)\"\s*alt=\"(.*?)\"\/>/",									 // Extraer datos del tag <IMG>
		"CADENA_EMBED" 			=> '!<embed[^>]+src="([^"]+)"[^>]+/>!',										 // Encontrar codigo embed
		"BBCODE_B" 			=> '/\[b\](.+?)\[\/b\]/is',											 // Encontrar en codigo bbcode		
		"DIRECCION_MAC" 		=> "/^([0-9a-fA-F][0-9a-fA-F]:){5}([0-9a-fA-F][0-9a-fA-F])$/",							 // Verificar la dirección MAC		
		"DIRECCION_IPV4" 		=> "^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$",	 		 // Comprobar dirección IPV4		
		"DIRECCION_IPV6" 		=> "/^\s*((([0-9A-Fa-f]{1,4}:){7}(([0-9A-Fa-f]{1,4})|:))|(([0-9A-Fa-f]{1,4}:){6}(:|((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})|(:[0-9A-Fa-f]{1,4})))|(([0-9A-Fa-f]{1,4}:){5}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(([0-9A-Fa-f]{1,4}:){4}(:[0-9A-Fa-f]{1,4}){0,1}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(([0-9A-Fa-f]{1,4}:){3}(:[0-9A-Fa-f]{1,4}){0,2}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(([0-9A-Fa-f]{1,4}:){2}(:[0-9A-Fa-f]{1,4}){0,3}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(([0-9A-Fa-f]{1,4}:)(:[0-9A-Fa-f]{1,4}){0,4}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(:(:[0-9A-Fa-f]{1,4}){0,5}((:((25[0-5]|2[0-4]\d|
[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})))(%.+)?\s*$/",	// Comprobar dirección IPV6
		));

		return $patron[$tipo];
	}
}
?>
<?php
	/* 
		Ejemplo de utilizacion
		Esta es una forma simple de como obtener el id de youtube
	*/

	// Definimos la clase
	$regexp = new RegExpUtils;

	// Contenido a comprobar
	$contenido = array('http://www.youtube.com/watch?v=Ud4HuAzHEUc');

	echo '<pre>';
	print_r($regexp->consultar_expresion('ID_VIDEO_YOUTUBE', $contenido));
	echo '</pre>';
?>

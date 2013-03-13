<?php
  /*
	* Código de validación con expresiones regulares.
	* Version: 0.9.0 beta
	* Copyright (c) 2013 Aleksander Haugas
	*
	* Licensed under the MIT license:
	* http://www.opensource.org/licenses/mit-license.php
	*/
	 
	function expresiones_regulares($patron_numb, $string)
	{
		// Comprobamos si no es nulo
		if(!$patron_num == null)
		{
			// Eliminamos espacios "si hay"
			$number = trim($patron_numb);
			
			// Comprobamos si es numérico
			if(is_numeric($number))
			{
			
				// NUMÉRICOS
				$patron_01 = "/^[0-9]*$/";		// Sólo cadena vacía o números
				$patron_02 = "/^[0-9]+$/";              // Sólo números. No se admite cadena vacía
		
				// ALFABÉTICOS
				$patron_03 = "/^[a-z\s]+$/";         	// Sólo letras en minúsculas, y espacios
				$patron_04 = "/^[a-z]+$/";         	// Sólo letras en minúsculas. No se admite cadena vacía
				$patron_05 = "/^[A-Z\s]+$/";         	// Sólo letras en mayúsculas, y espacios
				$patron_06 = "/^[A-Z]+$/";         	// Sólo letras en mayúsculas. No se admite cadena vacía
				$patron_07 = "/^[a-zA-Z\s]+$/";         // Sólo letras en mayúsculas/minúsculas, y espacios
				$patron_08 = "/^[a-zA-Z]+$/";         	// Sólo letras en mayúsculas/minúsculas. No se admite cadena vacía
		
				// ALFANUMÉRICOS
				$patron_09 = "/^[0-9a-z\s]+$/";         // Sólo letras en minúsculas, números y espacios
				$patron_10 = "/^[0-9a-z]+$/";         	// Sólo letras en minúsculas y números. No se admite cadena vacía
				$patron_11 = "/^[0-9A-Z\s]+$/";         // Sólo letras en mayúsculas, números y espacios
				$patron_12 = "/^[0-9A-Z]+$/";         	// Sólo letras en mayúsculas y números. No se admite cadena vacía
				$patron_13 = "/^[0-9a-zA-Z\s]+$/";      // Sólo letras en mayúsculas/minúsculas, números y espacios
				$patron_14 = "/^[0-9a-zA-Z]+$/";        // Sólo letras en mayúsculas/minúsculas y números. No se admite cadena vacía
		
				// ALFANUMÉRICO CON VOCALES CON TILDES Y ESPACIOS
				$patron_15 = "/^[a-zA-Z0-9 áéíóúAÉÍÓÚÑñ]+$/";
		
				// ALFANUMÉRICO SIN VOCALES CON TILDES Y ESPACIOS
				$patron_16 = "/^[a-z0-9-]*[a-z-]+[a-z0-9-]*$/";
		
				// DIRECCIÓN DE CORREO ELECTRÓNICO
				$patron_17 = "/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/";
				
				// URL Y FTP DE INTERNET
				$patron_18 = "/^(ht|f)tp(s?)\:\/\/[0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*(:(0-9)*)*(\/?)( [a-zA-Z0-9\-\.\?\,\'\/\\\+&%\$#_]*)?$/";
		
				// FECHA Y HORA
				$patron_19 = "/^\d{2}\/\d{2}\/\d{4}$/";								// [DD/MM/YYYY]
				$patron_20 = "/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/"; 		// [MM/DD/YYYY]		
				$patron_21 = "#^((19|20)?[0-9]{2}[- /.](0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01]))*$#";	// [YYYY/MM/DD]
				$patron_22 = "/^(0[1-9]|1\d|2[0-3]):([0-5]\d):([0-5]\d)$/";					// HORA 23:59:59
		
				// COLORES HEXADECIMALES
				$patron_23 = "/^#(?:(?:[a-f\d]{3}){1,2})$/i";		
		
				// CÓDIGOS POSTALES (http://en.wikipedia.org/wiki/List_of_postal_codes)
				$patron_24 = "/[0-9]{5,5}$/";													// Alemania
				$patron_25 = "/^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/";									// España	
				$patron_26 = "/^([0-9]{5})(-[0-9]{4})?$/i";											// EEUU
				$patron_27 = "/\A[A-Z]\d[A-Z]-\d[A-Z]\d\z/";											// Canadá
				$patron_28 = "/^([A-Z]{1,2}[0-9][A-Z0-9]? [0-9][ABD-HJLNP-UW-Z]{2})*$/";							// Reino Unido	
				$patron_29 = "/^[0-9]{3}-[0-9]{4}$/";												// Japon
				$patron_30 = "/^(F-)?((2[A|B])|[0-9]{2})[0-9]{3}$/";										// Francia	
				$patron_31 = "/^(V-|I-)?[0-9]{4}$/";												// Italia	
				$patron_32 = "/^[0-9]{4,4}$/";													// Austria	
				$patron_33 = "/^[0-9]{4,4}\s[a-zA-Z]{2,2}$/";											// Holanda
				$patron_34 = "/^([D-d][K-k])?( |-)?[1-9]{1}[0-9]{3}$/";										// Dinamarka
				$patron_35 = "/^[a-zA-Z]{2}-[0-9]{3}\s[0-9]{2}$/";										// Suecia
				$patron_36 = "/^[1-9]{1}[0-9]{3}$/";												// Belgica
				$patron_37 = "/^[0-9]{4,4}$/";													// Argentina
				$patron_38 = "/^[0-9]{4}/";													// Australia
				$patron_39 = "/^([0-9]{1})([0-9]{1})([0-9]{1})([0-9]{1})([0-9]{1})-?([0-9]{3})$/";						// Brasil
				$patron_40 = "/^[0-9]{5,5}$/";													// Estonia
				$patron_41 = "/^[0-9]{4,4}$/";													// Portugal
		
				// TARJETAS DE CRÉDITO
				$patron_42 = "/^(3[47][0-9]{13})*$/";			// Tarjeta de crédito American Express
				$patron_43 = "/^(3(?:0[0-5]|[68][0-9])[0-9]{11})*$/";	// Tarjeta de crédito Diner's Club
				$patron_44 = "/^(5[1-5][0-9]{14})*$/";			// Tarjeta de crédito MasterCard
				$patron_45 = "/^(4[0-9]{12}(?:[0-9]{3})?)*$/";		// Tarjeta de crédito Visa
				$patron_46 = "/^6(?:011|5[0-9]{2})[0-9]{12}$/";		// Tarjeta de crédito Discover
				$patron_47 = "/^(?:2131|1800|35\d{3})\d{11}$/";		// Tarjeta de crédito JCB
				$patron_48 = "/^2(014|149)[0-9]{11}$/";			// Tarjeta de crédito enROUTE
				$patron_49 = "/^3(0[0-5][0-9]{11}|[68][0-9]{12})$/";	// Tarjeta de crédito Carte Blanche
		
				// TARJETAS DE DÉBITO
				//$patron_50 = "/^6759d{12}(d{2,3})?$/";			// Tarjeta de débito Switch
				//$patron_51 = "/^6767d{12}(d{2,3})?$/";			// Tarjeta de débito Solo
				//$patron_52 = "/^5019d{12}$/";					// Tarjeta de débito Dankort
				//$patron_53 = "/^(5[06-8]|6d)d{10,17}$/";			// Tarjeta de débito Maestro
				//$patron_54 = "/^600722d{10}$/";				// Tarjeta de débito Forbrugsforeningen
				//$patron_55 = "/^(6304|6706|6771|6709)d{8}(d{4}|d{6,7})?$/";	// Tarjeta de débito Laser
						
				// SEGURIDAD SOCIAL
				$patron_56 = "/^\d{3}\-\d{2}\-\d{4}$/";													// EEUU
				//$patron_57 = "/^\d{17}[\d|X]|\d{15}$/";												// China
				$patron_58 = "/^((\d(\x20)\d{2}(\x20)\d{2}(\x20)\d{2}(\x20)\d{3}(\x20)\d{3} ((\x20)\d{2}|))|(\d\d{2}\d{2}\d{2}\d{3}\d{3}(\d{2}|)))$/";	// Francia
						
				// TELÉFONOS
				$patron_59 = "((\(0\d\d\) |(\(0\d{3}\) )?\d )?\d\d \d\d \d\d|\(0\d{4}\) \d \d\d-\d\d?)";	// Teléfono Alemania
				$patron_60 = "((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}";						// Teléfono EEUU
				$patron_61 = "(\(\d{3}\)|\d{3}-)?\d{8}";							// Teléfono China
				$patron_62 = "(0\d{1,4}-|\(0\d{1,4}\) ?)?\d{1,4}-\d{4}";					// Teléfono Japon
				$patron_63 = "(0( \d|\d ))?\d\d \d\d(\d \d| \d\d )\d\d";					// Teléfono Francia
				$patron_64 = "/^[9|8|6|7][0-9]{8}$/";								// Teléfono España
				$patron_65 = "^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$";			// Teléfonos en general
		
				// DOCUMENTO DE IDENTIDAD
				$patron_66 = "/^[0-9]{7,8}[A-Z]$/";					     			     	// NIF España
				$patron_67 = "/^([0-9a-zA-Z]{12})$/";								     	// NIF Francia
				$patron_68 = "/^([0-9a-zA-Z]{12})$/";								     	// NIF Italia
				$patron_69 = "/^([a-zA-Z]{2})\s([0-9]{7})$/";							     	// Pasaporte Francia
				$patron_70 = "/^[A-Za-z]{6}[0-9]{2}[A-Za-z]{1}[0-9]{2}[A-Za-z]{1}[0-9]{3} [A-Za-z]{1}$/";	     	// CIF Italia
				$patron_71 = "/^(X(-|\.)?0?\d{7}(-|\.)?[A-Z]|[A-Z](-|\.)?\d{7}(-|\.)? [0-9A-Z]|\d{8}(-|\.)?[A-Z])$/";	// CIF España
				
				// IBAN
				$patron_72 = "/DE\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{2}|DE\d{20}/";		// IBAN Alemania
				$patron_73 = "/ES\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|ES\d{22}/";		// IBAN España
				$patron_74 = "/SK\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|SK\d{22}/";		// IBAN Eslovakia
				$patron_75 = "/AD\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|AD\d{22}/";		// IBAN Andorra
				$patron_76 = "/SE\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|SE\d{22}/";		// IBAN Suecia
				$patron_77 = "/CH\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{1}|CH\d{19}/";		// IBAN Suiza
				$patron_78 = "/PL\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|PL\d{26}/";	// IBAN Polonia
				$patron_79 = "[a-zA-Z]{2}[0-9]{2}[a-zA-Z0-9]{4}[0-9]{7}([a-zA-Z0-9]?){0,16}";		// IBAN en general
				
				// ID DE VIDEOS MULTIMEDIA
				$patron_80 = "#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=embed/)[^&\n]+|(?<=v=)[^&\‌​n]+|(?<=youtu.be/)[^&\n]+#";	// YouTube
				$patron_81 = "/^(http|https):\/\/(www\.)?vimeo\.com\/(clip\:)?(\d+).*$/";							// Vimeo
				$patron_82 = "/(((http|https):\/\/)?(www\.)?metacafe\.com)(\/watch\/)(\d+)(.*)/i";						// Metacafe
		
				// URLS DE INTERNET		
				$patron_83 = "/\<a(.*)\>(.*)\<\/a\>/i";								// Encontrar enlaces web
				$patron_84 = "#/\*[^*]*\*+([^/][^*]*\*+)*/#";							// Comentarios multilineas
				$patron_85 = "#^(http|https):\/\/(.*)\.(gif|png|jpg)$#i";					// Comprueba si es una imagen
				$patron_86 = "/(a|O|s|b)\x3a[0-9]*?((\x3a((\x7b?(.+)\x7d)|(\x22(.+)\x22\x3b)))|(\x3b))/";	// Comprueba si la cadena está serializado
				$patron_87 = "/<img src=\"(.*?)\"\s*alt=\"(.*?)\"\/>/";						// Extraer datos del tag <IMG>
				$patron_88 = '!<embed[^>]+src="([^"]+)"[^>]+/>!';						// Encontrar codigo embed
		
				// DIRECCIÓN MAC
				$patron_89 = "/^([0-9a-fA-F][0-9a-fA-F]:){5}([0-9a-fA-F][0-9a-fA-F])$/";
		
				// DIRECCIÓN IPV4
				$patron_90 = "^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$";
		
				// DIRECCIÓN IPV6
				$patron_91 = "/^\s*((([0-9A-Fa-f]{1,4}:){7}(([0-9A-Fa-f]{1,4})|:))|(([0-9A-Fa-f]{1,4}:){6}(:|((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})|(:[0-9A-Fa-f]{1,4})))|(([0-9A-Fa-f]{1,4}:){5}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(([0-9A-Fa-f]{1,4}:){4}(:[0-9A-Fa-f]{1,4}){0,1}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(([0-9A-Fa-f]{1,4}:){3}(:[0-9A-Fa-f]{1,4}){0,2}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(([0-9A-Fa-f]{1,4}:){2}(:[0-9A-Fa-f]{1,4}){0,3}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(([0-9A-Fa-f]{1,4}:)(:[0-9A-Fa-f]{1,4}){0,4}((:((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(:(:[0-9A-Fa-f]{1,4}){0,5}((:((25[0-5]|2[0-4]\d|
		[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})?)|((:[0-9A-Fa-f]{1,4}){1,2})))|(((25[0-5]|2[0-4]\d|[01]?\d{1,2})(\.(25[0-5]|2[0-4]\d|[01]?\d{1,2})){3})))(%.+)?\s*$/";
		
				/* 
				* Reemplaza $number el numero del patron ej: $patron_89
				* El patron es la expresion regular para verificar o parsear
				*
				* El $string es el contenido a comprobar
				*/
				if (preg_match($number, $string)) 
				{
					return true;
				}
		
				return false;			
			}
		}
	}
?>

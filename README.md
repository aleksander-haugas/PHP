=========================
PHP Expresiones Regulares
=========================

Version:        0.9.0 Beta = Desarrollador:  Aleksander Haugas
_________________________________

Una pequeña libreria escrita en php, pensado para un desarrolllo rápido y eficiente con la inserccion de una sola linea de código listo para incluirlo en cualquier proyecto grande o pequeño.
Esta libreria utiliza expresiones regulares para verificar datos, extraer contenido, detectar y modificar datos.


Funciones Destacadas Soportadas:
--------------------------------

Deteccion de enlaces:             Deteccion de enlaces dentro de las etiquetas: <a href=""></a>
Deteccion de comentarios:         Deteccion de comentarios multilinea: /* comentario */
Comprobar si son imagenes:        Comprobacion de imagenes con url jpg, gif, png
Extraer datos de <img>            Extraer datos como la url o el titulo del tag <img>
Verificar Correo electronico:     Verificacion del correo electronico.
Encontrar código embed:           Encontrar el codigo embed para extraer contenido o incrustar
Comprobar cadenas serializadas:   Ver si una cadena esta serializado (tipo array)
Deteccion de URLs:                http, https, ftp
Verificar Fecha y Hora:           DD/MM/YYYY, MM/DD/YYYY, YYYY/MM/DD, 23:59:59
Verificar Colores:                #000000 (Hexadecimales)
Verificar Codigos Postales:       España, EEUU, Canadá, Alemania, Reino Unido, Japon, Francia, Italia, Austria.....etc.
Verificar Tarj de Crédito:        American Express, Diner's Club, MasterCard, Visa, Discover, JCB, enRoute, CarteBlanche.
Verificar Nº de Teléfono:         Verificación general y individual de paises.
Verificar Doc de Identidad:       España, Francia, Italia
Verificar Doc Fiscal:             Italia, España
Verificacion de IBAN:             Verificacion de IBAN en general y individual.
Extraer ID de los Videos:         YouTube, Vimeo, MetaCafe
Verificar Direcciones MAC:        Verificar direcciones MAC de los dispositivos o adaptadores.
Verificar Direcciones IPv4:       Comprobar direcciones IP comunes dentro de un rango
Verificar Direcciones IPv6:       Comprobar direcciones IPv6 (Nueva Generacion) dentro de un rango

Verificar mayusculas / minusculas / numeros / tildes y espacios

INSTRUCCIONES:
==============

1º - Descarge la libreria.
2º - Suba la libreria descargada a la carpeta de su servidor o proyecto
3º - incluya el archivo con require('funcs.regexp.php'); ó include('funcs.regexp.php');
4º - llame la funcion en el apartado deseado de su proyecto con expresiones_regulares('#numero','#datos');

Licencia:
=========
This code is license under the MIT library.

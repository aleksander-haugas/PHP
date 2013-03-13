=========================
PHP Expresiones Regulares
=========================

 - Version:        0.9.0 Beta
 - Desarrollador:  Aleksander Haugas

Una pequeña libreria escrita en php, pensado para un desarrolllo rápido y eficiente con la inserccion de una sola linea de código listo para incluirlo en cualquier proyecto grande o pequeño.
Esta libreria utiliza expresiones regulares para verificar datos, extraer contenido, detectar y modificar datos.


Funciones Destacadas Soportadas:
--------------------------------

 - **Deteccion de enlaces:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deteccion de enlaces dentro de las etiquetas: `<a href=""></a>`
 - **Deteccion de comentarios:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deteccion de comentarios multilinea: `/* comentarios */`
 - **Comprobar si son imagenes:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Comprobacion de imagenes con url jpg, gif, png
 - **Extraer datos de `<img>`:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Extraer datos como la url o el titulo del tag `<img>`
 - **Verificar Correo electronico:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Verificacion del correo electronico.
 - **Encontrar código embed:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Encontrar el codigo embed para extraer contenido o incrustar
 - **Comprobar cadenas serializadas:** &nbsp; Ver si una cadena esta serializado (tipo array)
 - **Deteccion de URLs:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; http, https, ftp
 - **Verificar Fecha y Hora:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DD/MM/YYYY, MM/DD/YYYY, YYYY/MM/DD, 23:59:59
 - **Verificar Colores:**&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#000000 (Hexadecimales)
 - **Verificar Codigos Postales:**&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;España, EEUU, Canadá, Alemania, Reino Unido, Japon, Francia, Italia, Austria.....etc.
 - **Verificar Tarj de Crédito:**&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;American Express, Diner's Club, MasterCard, Visa, Discover, JCB, enRoute, CarteBlanche.
 - **Verificar Nº de Teléfono:**&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verificación general y individual de paises.
 - **Verificar Doc de Identidad:**&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;España, Francia, Italia
 - **Verificar Doc Fiscal:**&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Italia, España
 - **Verificacion de IBAN:**&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verificacion de IBAN en general y individual.
 - **Extraer ID de los Videos:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; YouTube, Vimeo, MetaCafe
 - **Verificar Direcciones MAC:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Verificar direcciones MAC de los dispositivos o adaptadores.
 - **Verificar Direcciones IPv4:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Comprobar direcciones IP comunes dentro de un rango
 - **Verificar Direcciones IPv6:** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Comprobar direcciones IPv6 (Nueva Generacion) dentro de un rango

 - Verificar mayusculas / minusculas / numeros / tildes y espacios

INSTRUCCIONES:
==============

 - 1º - Descarge la libreria.
 - 2º - Suba la libreria descargada a la carpeta de su servidor o proyecto
 - 3º - incluya el archivo con require('funcs.regexp.php'); ó include('funcs.regexp.php');
 - 4º - llame la funcion en el apartado deseado de su proyecto con expresiones_regulares('#numero','#datos');

Licencia:
=========
This code is license under the MIT library.

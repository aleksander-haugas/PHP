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
 - **Deteccion de URLs:**_______________http, https, ftp
 - **Verificar Fecha y Hora:**___________DD/MM/YYYY, MM/DD/YYYY, YYYY/MM/DD, 23:59:59
 - **Verificar Colores:**________________#000000 (Hexadecimales)
 - **Verificar Codigos Postales:**_______España, EEUU, Canadá, Alemania, Reino Unido, Japon, Francia, Italia, Austria.....etc.
 - **Verificar Tarj de Crédito:**________American Express, Diner's Club, MasterCard, Visa, Discover, JCB, enRoute, CarteBlanche.
 - **Verificar Nº de Teléfono:**_________Verificación general y individual de paises.
 - **Verificar Doc de Identidad:**_______España, Francia, Italia
 - **Verificar Doc Fiscal:**_____________Italia, España
 - **Verificacion de IBAN:**_____________Verificacion de IBAN en general y individual.
 - **Extraer ID de los Videos:**_________YouTube, Vimeo, MetaCafe
 - **Verificar Direcciones MAC:**________Verificar direcciones MAC de los dispositivos o adaptadores.
 - **Verificar Direcciones IPv4:**_______Comprobar direcciones IP comunes dentro de un rango
 - **Verificar Direcciones IPv6:**_______Comprobar direcciones IPv6 (Nueva Generacion) dentro de un rango

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

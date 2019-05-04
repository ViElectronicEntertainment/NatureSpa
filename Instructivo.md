# Tutorial CRUD en PHP

* Tomado de : https://www.ecodeup.com/crud-en-php-para-principiantes/

## QUÉ VAMOS HACER

Vamos hacer un ejemplo muy sencillo, que nos va permitir ingresar, editar, leer y eliminar los datos de una tabla llamada libro y aunque es una sola tabla con tan solo 4 campos, te da la pauta suficiente para hacerlo con más tablas que tengan más campos.

## ESTRUCTURA DEL PROYECTO

La estructura queda como se ve en la imagen, con 8 archivos que los describo de forma general a continuación:

* index.php: Es un archivo que contiene html y lo que muestra son las opciones Ingresar y Ver, las mismas que direccionan a las páginas ingresar.php y mostrar.php respectivamente. 
* conexion.php: Este archivo contiene el código para la conexión con MySQL.
* libro.php: Contiene la clase Libro, con sus respectivas propiedades y métodos getters y setters.
* crud_libro.php: Este archivo tiene los métodos crud para la tabla libros.
* administrar_libro.php: Funciona como un controlador que redirecciona dependiendo la petición hecha desde la vista.
Finalmente se encuentran los archivos ingresar.php, mostrar.php y actualizar.php cuyas funciones son fácilmente reconocibles por los nombres que llevan.

## CREANDO LA BASE DE DATOS

Antes de continuar con la codificación, vamos a crear una base de datos en MySQL llamada biblioteca con una tabla llamada libro, para esto debes utilizar el siguiente script:

ver (schema.sql)
<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_libro.php');
	require_once('libro.php');
	$crud= new CrudLibro();
	$libro=new Libro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Cita</title>
</head>
<body>
	<form action='administrar.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $libro->getId()?>'>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' value='<?php echo $libro->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Servicio:</td>
			<td><input type='text' name='servicio' value='<?php echo $libro->getServicio()?>' ></td>
		</tr>
		<tr>
			<td>Fecha:</td>
			<td><input type='text' name='fecha' value='<?php echo $libro->getFecha() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>
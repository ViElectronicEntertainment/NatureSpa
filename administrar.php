<?php
//incluye la clase Libro y CrudCitas
require_once('crud.php');
require_once('citas.php');
$crud= new CrudCitas();
$libro= new Libro();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$libro->setHora($_POST['hora']);
		$libro->setNombre($_POST['nombre']);
		$libro->setServicio($_POST['servicio']);
		$libro->setValor($_POST['valor']);
		$libro->setFecha($_POST['fecha']);
		//llama a la función insertar definida en el crud
		$crud->insertar($libro);
		header('Location: mostrar.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$libro->setId($_POST['id']);
		$libro->setHora($_POST['hora']);
		$libro->setNombre($_POST['nombre']);
		$libro->setServicio($_POST['servicio']);
		$libro->setValor($_POST['valor']);
		$libro->setFecha($_POST['fecha']);
		$crud->actualizar($libro);
		header('Location: mostrar.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: mostrar.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>
<?php
//incluye la clase Libro y CrudCitas
	require_once('crud.php');
	require_once('citas.php');
	$crud= new CrudCitas();
	$libro=new Libro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['id']);
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- NatureSpa Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>NatureSpa</title>
</head>

<body>
    <div class="container">
        <div class="mx-auto">
            <p style="text-align:center;">
                <img src="img/logo.svg" alt="NatureSpa" style="width:40%; margin-top: 60px;">
                <form action='administrar.php' method='post'>
                    <table>
                        <tr>
							<input type='hidden' name='id' value='<?php echo $libro->getId()?>'>
                            <td>Hora:</td>
                            <td><input type='text' name='hora' value='<?php echo $libro->getHora()?>'></td>
                        </tr>
                        <tr>
                            <td>Nombre:</td>
                            <td> <input type='text' name='nombre' value='<?php echo $libro->getNombre()?>'></td>
                        </tr>
                        <tr>
                            <td>Servicio:</td>
                            <td><input type='text' name='servicio' value='<?php echo $libro->getServicio()?>'></td>
                        </tr>
                        <tr>
                            <td>Precio:</td>
                            <td><input type='text' name='valor' value='<?php echo $libro->getValor()?>'></td>
                        </tr>
                        <tr>
                            <td>Fecha:</td>
                            <td><input type='text' name='fecha' value='<?php echo $libro->getFecha()?>'></td>
                        </tr>
                        <input type='hidden' name='actualizar' value='actualizar'>
                    </table>
                    <input type='submit' value='Guardar'>
                    <a href="index.php">Volver</a>
                </form>
            </p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
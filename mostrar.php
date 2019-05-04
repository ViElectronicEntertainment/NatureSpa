<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro= new Libro();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros=$crud->mostrar();
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
    <div class="container-fluid">
        <p style="text-align:center;">
            <img src="img/logo.svg" alt="NatureSpa" style="width:40%; margin-top: 60px;">
            <!-- Agenda -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Agenda por dias - <a href="ingresar.php">Nueva cita</a> </h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    <th class="w-1">Nombre</th>
                                    <th>Servicio</th>
                                    <th>Fecha</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach ($listaLibros as $libro) {?>
                                <tr>
									<td><?php echo $libro->getNombre() ?></td>
									<td><?php echo $libro->getServicio() ?></td>
									<td><?php echo $libro->getFecha()?> </td>
									<td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">
										<i class="far fa-edit"></i></a>
									</td>
									<td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=e">
										<i class="far fa-trash-alt"></i></a>
									</td>
								</tr>
								<?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br />
            <br />
            <p style="text-align:center;">
                <a class="boton_uno" href="index.php">Regresar</a>
            </p>
        </p>
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
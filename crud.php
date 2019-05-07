<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudCitas{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO citas values(NULL,:hora,:nombre,:servicio,:valor,:fecha)');
			$insert->bindValue('hora',$libro->getHora());
			$insert->bindValue('nombre',$libro->getNombre());
			$insert->bindValue('servicio',$libro->getServicio());
			$insert->bindValue('valor',$libro->getValor());
			$insert->bindValue('fecha',$libro->getFecha());
			$insert->execute();
		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM citas');

			foreach($select->fetchAll() as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setHora($libro['hora']);
				$myLibro->setNombre($libro['nombre']);
				$myLibro->setServicio($libro['servicio']);
				$myLibro->setValor($libro['valor']);
				$myLibro->setFecha($libro['fecha']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM citas WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM citas WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$libro=$select->fetch();
			$myLibro= new Libro();
			$myLibro->setId($libro['id']);
			$myLibro->setHora($libro['hora']);
			$myLibro->setNombre($libro['nombre']);
			$myLibro->setServicio($libro['servicio']);
			$myLibro->setValor($libro['valor']);
			$myLibro->setFecha($libro['fecha']);
			return $myLibro;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE citas SET hora=:hora, nombre=:nombre, servicio=:servicio,valor=:valor, fecha=:fecha  WHERE ID=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('hora',$libro->getHora());
			$actualizar->bindValue('nombre',$libro->getNombre());
			$actualizar->bindValue('servicio',$libro->getServicio());
			$actualizar->bindValue('valor',$libro->getValor());
			$actualizar->bindValue('fecha',$libro->getFecha());
			$actualizar->execute();
		}
	}
?>
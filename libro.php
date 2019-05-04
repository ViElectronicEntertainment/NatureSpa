<?php
	class Libro{
		private $id;
		private $nombre;
		private $servicio;
		private $fecha;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getServicio(){
			return $this->servicio;
		}

		public function setServicio($servicio){
			$this->servicio = $servicio;
		}

		public function getFecha(){
		return $this->fecha;
		}

		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>
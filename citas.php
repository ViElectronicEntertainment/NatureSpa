<?php
	class Libro{
		private $id;
		private $hora;
		private $nombre;
		private $servicio;
		private $valor;
		private $fecha;

		function __construct(){}

		public function getHora(){
		return $this->hora;
		}
		
		public function setHora($hora){
			$this->hora = $hora;
		}

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

		public function getValor(){
			return $this->valor;
		}

		public function setValor($valor){
			$this->valor = $valor;
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
	<?php

//------------------------------------------------------

	class Persona{

		public $nombre;
		public $edad;
		public static $mayoriaEdad = 18;

		function __construct(){
			$this->edad = 18;
		}

		function saluda(){

			echo "Hola mucho gusto, mi nombre es $this->nombre<br>";
		}

		function getSaludo(){

			return "Hola mucho gusto, mi nombre es $this->nombre<br>";
		}

		function respondeSaludo($nombreInterlocutor){

			echo "Hola mucho gusto $nombreInterlocutor, mi nombre es $this->nombre<br>";
		}

		function setEdad($edadInterlocutor){

			$this->edad = $edadInterlocutor + 5;
		}

		function getEdad(){

			return $this->edad;
		}

		public static function funcionEstatica1($numero){

			echo 4 * $numero . "<br>"; 
		}

		public static function funcionEstatica2(){

			echo self::$mayoriaEdad . "<br>";
		}

	}

	?>
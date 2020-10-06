<a href="index.php">Inicio</a><br><br>	


	<?php

//------------------------------------------------------

	include("P1_AI8_functions.php");
	include("P1_AI8_Modelo.php");

	titulo("Crear objeto");

	//Diferencia entre acceder por arreglo y a un objeto

	// $arrPersona = [
	// "nombre" => "Eduardo",
	// "edad" => 30
	//];
	// echo $arrPersona["nombre"]."<br>";

	$mPersona = new Persona();
	$mPersona -> nombre = "Eduardo";
	$mPersona -> edad = 30;
	echo var_dump($mPersona);

	$mPersona2 = new Persona();
	$mPersona2 -> nombre = "Arturo";
	$mPersona2 -> edad = 21;
	echo var_dump($mPersona2);

	titulo("Impresion desde objeto");
	$mPersona -> saluda();
	$mPersona2 -> saluda();

//------------------------------------------------------
	titulo("Impresion desde variable");
	$saludo = $mPersona->getSaludo();
	echo $saludo;

//------------------------------------------------------
	titulo("Pasar parametros");
	$mPersona->saluda();
	$mPersona2->respondeSaludo($mPersona->nombre);

//------------------------------------------------------
	titulo("Pasar parametros 2");
	//$mPersona->edad = 25;
	$mPersona->setEdad($mPersona->edad);
	echo var_dump($mPersona);
	echo "<br>";

//------------------------------------------------------
	titulo("Obtener valores 2");
	$edadPersona = $mPersona2->getEdad();
	echo $edadPersona."<br>";

//------------------------------------------------------
	titulo("Obtener variable estatica");
	echo Persona::$mayoriaEdad."<br>";

//------------------------------------------------------
	titulo("Llamar funcion estatica");
	Persona::funcionEstatica1(12);	
	Persona::funcionEstatica2();

?>
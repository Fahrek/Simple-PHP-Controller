<?php 

if ( ! isset($_POST['nombre']) ) {
 	include 'formulario.html.php';
}else{
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];

	$saludo = $nombre . " " . $apellidos;

	include 'saludo.html.php';
}
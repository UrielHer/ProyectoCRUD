<?php 
	require_once "../conexion.php";
	require_once "../metodos.php";

	$nombre=$_POST['txtnombre'];
	$apellido=$_POST['txtapellido'];
	$telefono=$_POST['txttelefono'];
	$correo=$_POST['txtcorreo'];
	$id=$_POST['id'];

	$datos=array(
			$nombre,
			$apellido,
			$telefono,
			$correo,
			$id
				);
	$obj= new metodos();

	if($obj->actualizaDatosNombre($datos)==1){
		header("location:../index.php");
	}else{
		echo "fallo al agregar";
	}
 ?>
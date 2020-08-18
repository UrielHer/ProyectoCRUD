<?php 
	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$nombre=$_POST['txtnombre'];
	$apellido=$_POST['txtapellido'];
	$telefono=$_POST['txttelefono'];
	$correo=$_POST['txtcorreo'];

	$datos=array(
			$nombre,
			$apellido,
			$telefono,
			$correo
				);
	$obj= new metodos();
	if($obj->insertarDatosNombre($datos)==1){
		header("location:../index.php");
	}else{
		echo "fallo al agregar";
	}

 ?>
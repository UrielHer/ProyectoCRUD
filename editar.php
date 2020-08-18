<?php 

	require_once "conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();
	$id=$_GET['id'];
	$sql="SELECT nombre,apellido,telefono,correo 
			from t_persona where id='$id'";
	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<hr><center><h3><u>EDITAR DATOS</u></h3></center><hr>
	<form action="procesos/actualizar.php" method="post">
		<center>
			<table border="2px">
				<input type="text" hidden="" value="<?php echo $id ?>" name="id">
				<tr>
					<td><label>Nombre</label></td>
					<td><input type="text" name="txtnombre" value="<?php echo $ver[0] ?>"></td>
				</tr>
				<tr>
					<td><label>Apellido</label></td>
					<td><input type="text" name="txtapellido" value="<?php echo $ver[1] ?>"></td>
				</tr>
				<tr>
					<td><label>Telefono</label></td>
					<td><input type="text" name="txttelefono" value="<?php echo $ver[2] ?>"></td>
				</tr>
				<tr>
					<td><label>Correo</label></td>
					<td><input type="text" name="txtcorreo" value="<?php echo $ver[3] ?>"></td>
				</tr>
				<tr>
					<td><button>Agregar</button></td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>
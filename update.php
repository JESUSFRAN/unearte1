
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
	
	require 'conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$cedula = $_POST["cedula"];
	$email = $_POST['email'];
	$genero = $_POST["genero"];
	$telefono = $_POST['telefono'];
	$celular = $_POST["celular"];
	$direccion = $_POST["direccion"];
	$n_academico = $_POST["n_academico"];
    $univ = $_POST["univ"];
	
	
$sql = "UPDATE acreditado SET nombres='$nombre', apellidos='$apellidos', cedula='$cedula', correo='$email', genero='$genero', telefono='$telefono', celular='$celular', direccion='$direccion', n_academico='$n_academico', univ='$univ' WHERE id = '$id'";
	$resultado = $conexion->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				<a href="buscador.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>

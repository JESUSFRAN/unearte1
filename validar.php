
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


?>

<?php

require 'conexion.php';
$usuario = $_POST ['usuario'];
$clave = $_POST ['clave'];
$consulta="SELECT * FROM login WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:menu.php");
 	
 } 
 else {
 	echo "<script type='text/javascript'>
			alert('Error Usuaio o Contraseña Incorrectos ');
			location.href = 'index.php'; 
			//window.location.reload(true);
		</script>";
  }
 mysqli_free_result($resultado);

 mysqli_close($conexion);
?>

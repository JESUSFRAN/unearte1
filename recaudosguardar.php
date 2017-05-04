<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>


<?php
	

require 'conexion.php';
    $r_cedula = $_POST['r_cedula'];
    $p_s_registro = $_POST['p_s_registro'];
	$c_a_taller = $_POST['c_a_taller'];
	$f_cedula = $_POST['f_cedula'];
    $c_f_bachiller = $_POST['c_f_bachiller'];
	$c_f_e_superior = $_POST['c_f_e_superior'];
	$c_f_e_media = $_POST['c_f_e_media'];
	$c_notas_m_diversificado = $_POST['c_notas_m_diversificado'];
	$c_trabajo = $_POST['c_trabajo'];
	$soportessi = $_POST['soportessi'];
    $soportes2 = $_POST['soportes2'];
    $depositobopcion = $_POST['depositobopcion'];
    $nom_banco = $_POST['nom_banco'];
    $nu_deposito = $_POST['nu_deposito'];
    $revisado = $_POST['revisado'];	



	
   

    $sql = "INSERT INTO recaudos(r_cedula, p_s_registro, c_a_taller, f_cedula, c_f_bachiller, c_f_e_superior, c_f_e_media, c_notas_m_diversificado, c_trabajo, soportessi, soportes2, depositobopcion,nom_banco, nu_deposito, revisado) VALUES ('$r_cedula', '$p_s_registro', '$c_a_taller', '$f_cedula', '$c_f_bachiller', '$c_f_e_superior', '$c_f_e_media', '$c_notas_m_diversificado', '$c_trabajo', '$soportessi', '$soportes2', '$depositobopcion', '$nom_banco', '$nu_deposito', '$revisado')";
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
						<h3>REGISTRO GUARDADO</h3>

<a href="acreditar.php" class="btn btn-primary">Regresar</a


						<?php } else { ?>
						<h3>ERROR AL GUARDAR <h3><span class="glyphicon glyphicon-warning-sign col-sm-20"> 
Error  al Guardar los Datos <?php echo $conexion->error; ?></h3></h3>
					<?php } ?>
					
<a href="recaudos.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>

		
	</body>
</html>

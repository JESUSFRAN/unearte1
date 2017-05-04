<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


?>

<?php
	
	
	require 'conexion.php';


	$cedula = $_POST['cedula1'];
	$uni_creditos = $_POST['uni_creditos'];
	$nom_unidad = $_POST['nom_unidad'];
  $codigo = $_POST['codigo'];
	$descripcion_apre = $_POST['descripcion_apre'];
  $fuentes_apren = $_POST['fuentes_apren'];
  $fecha = $_POST['fecha'];
        
$sql1 = "INSERT INTO acreditacion(cedula, fecha, uni_creditos, nombre_unidad, codigo, descripcion_apre, fuentes_apren) VALUES ('$cedula', '$fecha', '$uni_creditos', '$nom_unidad', '$codigo', '$descripcion_apre', '$fuentes_apren')";


      $resultado = $conexion->query($sql1);
      
?>



<header>  
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script  src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
        <script type="text/javascript" src="js/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </header>

<body> 
<div class="container">
  <div class="row">
    <div class="row" style=" 
 margin: auto;
     text-align: center;
    margin-top: 12%;
    margin-right: 38%;
    background: rgba(0,128,179,1);
background: -moz-linear-gradient(-45deg, rgba(0,128,179,1) 1%, rgba(61,97,162,1) 16%, rgba(209,21,121,1) 52%, rgba(143,61,123,1) 74%, rgba(64,108,125,1) 100%);
background: -webkit-gradient(left top, right bottom, color-stop(1%, rgba(0,128,179,1)), color-stop(16%, rgba(61,97,162,1)), color-stop(52%, rgba(209,21,121,1)), color-stop(74%, rgba(143,61,123,1)), color-stop(100%, rgba(64,108,125,1)));
background: -webkit-linear-gradient(-45deg, rgba(0,128,179,1) 1%, rgba(61,97,162,1) 16%, rgba(209,21,121,1) 52%, rgba(143,61,123,1) 74%, rgba(64,108,125,1) 100%);
background: -o-linear-gradient(-45deg, rgba(0,128,179,1) 1%, rgba(61,97,162,1) 16%, rgba(209,21,121,1) 52%, rgba(143,61,123,1) 74%, rgba(64,108,125,1) 100%);
background: -ms-linear-gradient(-45deg, rgba(0,128,179,1) 1%, rgba(61,97,162,1) 16%, rgba(209,21,121,1) 52%, rgba(143,61,123,1) 74%, rgba(64,108,125,1) 100%);
background: linear-gradient(135deg, rgba(0,128,179,1) 1%, rgba(61,97,162,1) 16%, rgba(209,21,121,1) 52%, rgba(143,61,123,1) 74%, rgba(64,108,125,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0080b3', endColorstr='#406c7d', GradientType=1 );
    width: 450px;
    height: 286px;
    margin-left: 18%;
    border-style: outset;
    border-width: 16px;
    border-radius: 10px 10px 10px 10px;
color:#fff;">
<?php if($resultado) { ?>

<br>
 <br> 
    <IMG SRC="img/5.png" WIDTH=80 HEIGHT=80 BORDER=2 ALT="Error  al registrar  los Datos en la base de datos ">  
	<h2>Registrado con Exito   </h2>

<a href="acreditar.php" class="btn btn-primary col-sm-4 center-block" style="margin-left: 34%;"> <h4>
Continuar<IMG SRC="img/10.ico" WIDTH=20 HEIGHT=20  ALT=""></h4>     </a>

	
</div>
</div>
						
		




        						<?php } else { ?>


						<IMG SRC="img/6.png" WIDTH=100 HEIGHT=100 BORDER=2 ALT="Error  al registrar  los Datos en la base de datos ">  
						 
   <h2>Error  al Guardar los Datos.</h2>



<a href="acreditar.php"  class="btn btn-primary col-sm-4 center-block " style="
    
    margin-left: 34%;"><h4><IMG SRC="img/8.ico" WIDTH=30 HEIGHT=30  ALT="">   Volver</h4> </span></a>
						
					<?php } ?>
					
				</div></div>
					
		</div>
	</body>

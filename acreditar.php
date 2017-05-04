

<?php

	require 'conexion.php';
	
	$where = "1";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE cedula  LIKE '$valor'";
		}

	}
	$sql = "SELECT * FROM acreditado $where";
	$resultado = $conexion->query($sql);
	mysqli_close($conexion);
?>
<html lang="es">




	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	<title>Acreditacion</title>
	
<style type="text/css">
	label{ 
		margin: 2 auto;
		margin-left: 20px;
		margin-bottom: 15px
	}
	h1{
		margin-left: 20%;
	}
	input#n_curricular{
width: 57%;
	}
	div.container{
		
background: -o-linear-gradient(45deg, rgba(78,247,52,1) 0%, rgba(78,247,52,0.82) 14%, rgba(101,219,47,0.76) 19%, rgba(246,41,12,0.76) 51%, rgba(135,24,240,0.76) 71%, rgba(231,56,39,0.76) 100%);
background: -ms-linear-gradient(45deg, rgba(78,247,52,1) 0%, rgba(78,247,52,0.82) 14%, rgba(101,219,47,0.76) 19%, rgba(246,41,12,0.76) 51%, rgba(135,24,240,0.76) 71%, rgba(231,56,39,0.76) 100%);
background: linear-gradient(45deg, rgba(78,247,52,1) 0%, rgba(78,247,52,0.82) 14%, rgba(101,219,47,0.76) 19%, rgba(246,41,12,0.76) 51%, rgba(135,24,240,0.76) 71%, rgba(231,56,39,0.76) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4ef734', endColorstr='#e73827', GradientType=1 );
/*color de fondo */
border-radius: 10px 180px 20px 20px;
-moz-border-radius: 72px 20px 20px 20px;
-webkit-border-radius: 72px 20px 20px 20px;
border: 0px solid #000000;
/*esquinas */
-webkit-box-shadow: 3px 10px 28px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 10px 28px 0px rgba(0,0,0,0.75);
box-shadow: 3px 10px 28px 0px rgba(0,0,0,0.75);
/*sombra  */
	}
</style>

	<body>

		<div class="row">

		<h1 style="text-align:center">SOLICITUD DE LA  ACREDITACIÓN POR EXPERIENCIA</h1>
			</div>
		<div class="container">
			
			


                  <center></center> <h2>DATOS DE LA SOLICITUD</h2></center>



			<div class="row">

			
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					

		<b>Cedula: </b>	<input type="text" id="campo" name="campo" />
         
		 <button  type="submit"  id="enviar" name="enviar"  class="btn btn-info "/>
		<span class="glyphicon glyphicon-search" aria-hidden="" ></span>Buscar</button>
				
				
				</form>
				</div>
			
			<br>
			
			
					
					<tbody>
						<?php require 'conexion.php';  while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
						

			<div class="form-group">
<form action="acreditarguardar.php" method="POST">
<div class="form-group">

<!-- nombre -->

	<label for="nombre1" class=""  >Nombres</label>

		<input type="text" class=""  id="nombre1" name="nombre1"   value="<?php echo $row['nombres']; ?>" readonly>
						
<!-- nombre -->  

		    <label for="apellidos1" class="">Apellidos</label>
						
			   <input type="text" class="" id="apellidos1" name="apellidos" value="<?php echo $row['apellidos']; ?>"  readonly> 
					</div>	
                 <div class="form-group">
<!-- CEDULA  -->
			

			<label for="cedula" class="">Cédula de identidad:</label>
					
					
				<input type="text" class="" id="cedula1" name="cedula1" value="<?php echo $row['cedula']; ?>" >
                           
 
       
     <!--Nivel Academico  -->
     		<label for="cedula" class="">Nivel Academico </label>
					
					
				<input type="text" class="" id="n_academico1" name="f_solicitud" value="<?php echo $row['n_academico']; ?>" >



    

</div>	
                 
						<h1>DATOS DE LA SOLICITUD</h1>



 <!-- Fecha de solicitud  -->

			<label for="cedula" class="">Fecha de solicitud:</label>
					
					
				<input type="text" class="" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>">
                            
                        </div>	
                 <div class="form-group"> 


<!--Nombre de la unidad curricular:-->



                 <div class="form-group">
 
<!-- codigo -->
<label for="cedula" class="">Código:</label>
					
  <input type="text" class="" id="codigo" name="codigo" value="" >




<!-- unidad  de credito  -->	

 <label for="cedula" class="">Unidades crédito:</label>
					
  <input type="text" class="" id="uni_creditos" name="uni_creditos" >


 
	
</div>	
                 <div class="form-group">
	<!-- Nombre de la unidad curricular: -->	


<label for="cedula" class="">Nombre de la unidad curricular</label>
					
  <input type="text" class="" id="nom_unidad"  name="nom_unidad"  >
 <!-- texarea1: -->	</div>
<label style=" margin:0px 0px 0px 50px;">DESCRIPCIÓN DEL APRENDIZAJE</label> <label style=" margin:0px 0px 0px 136px;">DESCRIPCIÓN DEL APRENDIZAJE</label>
 <textarea type="text" name="descripcion_apre" rows="10" cols="50"></textarea>
<!-- tearea 2: -->	

<textarea type="text" name="fuentes_apren" rows="10"  cols="50"></textarea>
				<!-- boton guardar  -->


				<div class="form-group">

<div class="col-sm-offset-2 col-sm-9">
<a href="bienvenido.php" style=" margin:2px 0px 2px 06px;" class="btn btn-danger col-sm-3"><span class="glyphicon glyphicon-salir"></span>Salir</a>
	        
  <button type="reset" class="btn btn-default col-sm-3" style=" margin:2px 30px 2px 30px;" value="Reset"><span class="glyphicon glyphicon-trash"></span>Limpiar</button>
        

  <button type="submit" id="boton"  class="btn btn-primary col-sm-3"> <span class="glyphicon glyphicon-saved"></span> Guardar</button>   
 


</div></div></div></div></form>
					</div>
				</div>
		<?php } ?>
	</body>
</html>	




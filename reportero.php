


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
		<link rel="stylesheet"  href="css/Reportes.css">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>

<body>


<h2><CENTER>Reporte Global </CENTER></h2>

	
<div class="form-group " style="height: ; width: 100%;  background:#fff;  position: relative;  margin:0px 0px 0px 0%;" >
<header>
  
	<div class="Contenedor" id="uno">
	<img class="lista" src="img/15.ico">
	<p class="texto"><a href="reporteg.php"  class="btn btn-info" style=" box-shadow: inset -1px -3px 7px 0px black; margin:0px 0px 0px 0px;">Reporte 1</p></a>
		</div>


	<div class="Contenedor" id="dos">
		<img class="lista" src="img/15.ico">
		<p class="texto"><a href="reporteg 2general.php"  class="btn btn-info" style=" box-shadow: inset -1px -3px 7px 0px black; margin:0px 0px 0px 0px;">Reporte 2</p></a>
	</div>

	<div class="Contenedor" id="tres">
	<img class="lista" src="img/15.ico">
	 <p class="texto"><a href="reporteg3general .php"  class="btn btn-info" style=" box-shadow: inset -1px -3px 7px 0px black; margin:0px 0px 0px 0px;">Reporte 3</p></a>
	</div>

</div>

</header>

<!--  buscador  y reporte-->

<h2><CENTER>Reporte Personal </CENTER></h2>
<div class="container">
<div class="row">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Cedula: </b>

					<input type="text" id="campo" name="campo" />
         
				<button  type="submit"  id="enviar" name="enviar"  class="btn btn-info "/>
				<span class="glyphicon glyphicon-search" aria-hidden="" >Buscar</span>
				</button>
				</form>
				</div>
			
			<br>
			
				<table class="table table-striped">
					<thead>
						<tr>
							
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cedula</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>

							<tr><td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nombres']; ?></td>
								<td><?php echo $row['apellidos']; ?></td>
								<td><?php echo $row['cedula']; ?></td>
								
								
								<td><a href="/unearte/REPORTES/reportepersonal.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								

								
							</tr>
						<?php } ?>
					</tbody>
				</table>

</div></div>


<!--  buscador  y reporte-->




         

 

			</body>
</html>

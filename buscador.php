
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php

	require 'conexion.php';
	// contadorrrrrr

//buscadorrr
	$where = "";
	
	if(!empty($_POST))
	{
		$buscar = $_POST['buscar'];
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE $buscar LIKE '$valor'";
			
			
		
		}

	}
	$sql = "SELECT * FROM acreditado $where";
	$resultado = $conexion->query($sql);
	$cont = 0;  
?>
<html lang="es">




	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	<title>Buscar</title>
	<body>
		
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">Registro de Solicitantes de Acreditación de Aprendizaje por Experienia</h2><br>
			</div>
			
			<div class="row">
				
				
				
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<!-- botones de busquedas  -->
			
 <div class=" form-inline col-sm-8" >

		<div class="form-group col-sm-20" >
         
        
                        
                           <select class="form-control"  id="buscar" name="buscar">
                           <option value="cedula">Cédula</option >
                            <option value="nombres">Nombres</option>
                            <option value="apellidos">Apellidos</option>     
                            <option value="genero">Genero</option>
                            <option value="celular">Celular</option>
                            <option value="telefono">Teléfono</option>
                           <option value="correo"> Correo</option>
                            <option value="direccion">Direccion</option>
                            <option value="edad">Edad</option>
                           </select>


                          
              <input type="text" class="form-control" id="campo" name="campo" placeholder="Datos de Búsqueda " autofocus/>

             <button  type="submit"  id="enviar" name="enviar"  class="btn btn-primary"  style=" box-shadow: inset -1px -3px 7px 0px black;" ><span class="glyphicon glyphicon-search"></span> Buscar</span>
				</button>
                       </div>
				</div>
				
				<div class="form-group col-sm-2 " style=" margin:0px 0px 0px 2%;" >
         
				
               
               <a href="nuevo.php"  class="btn btn-info" style=" box-shadow: inset -1px -3px 7px 0px black; margin:2px 0px 2px 0px;"> <span class="glyphicon glyphicon-file" aria-hidden="true"></span> Nuevo Registro</a></span>


				<a target="_blank" href="reporteg.php" style=" box-shadow: inset -1px -3px 7px 0px black;margin:2px 0px 2px 1px;"  class="btn btn-info" /><span class="	glyphicon glyphicon-list-alt" aria-hidden="true"></span>Reporte General</a></div>
			</div>
			</form>
			
			
			<div class="row table-responsive">
				<table class="table table-striped table table-hover">
					<thead>
						<tr>
						
                            
							<th>ID</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cédula</th>
							<th>Edad</th>
							<th>Genero</th>
							<th>Correo</th>
							<th>Teléfono</th>
							<th>Celular</th>
							<th>Dirección</th>
							<th>Nivel Académico</th>
						    <th>Fecha de Nacimiento</th>

							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
							     <td><?php echo ++$cont; ?></td>
								
								<td><?php echo $row['nombres']; ?></td>
								<td><?php echo $row['apellidos']; ?></td>
								<td><?php echo $row['cedula']; ?></td>
							        <td><?php echo $row['edad']; ?></td>
								<td><?php echo $row['genero']; ?></td>
								<td><?php echo $row['correo']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><?php echo $row['celular']; ?></td>
								<td><?php echo $row['direccion']; ?></td>
								<td><?php echo $row['n_academico']; ?></td>
								<td><?php echo $row['fnacimiento']; ?></td>
								
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">

								<span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea Eliminar este Registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>	

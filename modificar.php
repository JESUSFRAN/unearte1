
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM acreditado WHERE id = '$id'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	//echo var_dump($row);
	
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
	<script type="text/javascript">
		function validarNumeros(e) { // 1
        tecla = (document.all) ? e.keyCode : e.which; // 2
        if (tecla==8) return true; // backspace
        if (tecla==109) return true; // menos
    if (tecla==110) return true; // punto
        if (tecla==189) return true; // guion
        if (e.ctrlKey && tecla==86) { return true}; //Ctrl v
        if (e.ctrlKey && tecla==67) { return true}; //Ctrl c
        if (e.ctrlKey && tecla==88) { return true}; //Ctrl x
        if (tecla>=96 && tecla<=105) { return true;} //numpad
 
        patron = /[0-9]/; // patron
 
        te = String.fromCharCode(tecla); 
        return patron.test(te); // prueba
    }
	</script>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
		<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">

<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>"/>

				<div class="form-group">

					<label for="nombre" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">

						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row['nombres']; ?>" required>
					</div>
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>"/>


				<div class="form-group">

					<label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-10">
					
						<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']; ?>" required="required">
					</div>
				</div>


				<div class="form-group">

					<label for="cedula" class="col-sm-2 control-label">Cedula</label>
					<div class="col-sm-10">
					
						<input type="text" class="form-control" id="cedula" name="cedula" placeholder="cedula" value="<?php echo $row['cedula']; ?>" required="required" onkeydown="return validarNumeros(event)">
					</div>
				</div>
<div class="col-sm-10">
          Fecha de Nacimiento<input type="date" class="form-control" name="fecha" step="2" min="1970-01-01" max="2013-12-31" value="<?php echo $row['fnacimiento']; ?>" onkeydown="return validarNumeros(event)">	
</div>
				<div class="form-group">
					<label for="genero" class="col-sm-2 control-label">Genero</label>
					
					<div class="col-sm-10">

						<label class="radio-inline">
					<input type="radio" id="genero" name="genero" value="Femenino" <?php if($row['genero']=='Femenino') echo 'checked'; ?>> Femenino 
						</label>
						
						<label class="radio-inline">
						<input type="radio" id="genero" name="genero" value="Masculino" <?php if($row['genero']=='Masculino') echo 'checked'; ?>> Masculino
						</label>
					</div>
				</div>
				
				<div class="form-group">

					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
					
						<input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']; ?>" required="required" onkeydown="return validarNumeros(event)">
					</div>
				</div>


				<div class="form-group">

					<label for="celular" class="col-sm-2 control-label">Celular</label>
					<div class="col-sm-10">
					
						<input type="text" class="form-control" id="celular" name="celular" placeholder="celular" value="<?php echo $row['celular']; ?>" onkeydown="return validarNumeros(event)">
					</div>
				</div>


				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">correo</label>
					<div class="col-sm-10">

						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['correo']; ?>"  required>
					</div>
				</div>

				<div class="form-group">

					<label for="direccion" class="col-sm-2 control-label">direccion</label>
					
					<div class="col-sm-10">
					
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" value="<?php echo $row['direccion']; ?>" required>
					
					</div>
				
				   </div>

				    <div class="form-group">
					<label for="n.academico" class="col-sm-2 control-label">nivel academico</label>
					<div class="col-sm-10">
						<select class="form-control" id="n_academico" name="n_academico">

<option value="Bachiller" <?php if($row['n_academico']=='Bachiller') echo 'selected'; ?>Bachiller</option>

<option value="Tecnico medio" <?php if($row['n_academico']=='Tecnico medio') echo 'selected'; ?>>Tecnico medio </option>

<option value="Tecnico superior" <?php if($row['n_academico']=='Tecnico superior') echo 'selected'; ?>>Tecnico superior </option>
							
<option value="licenciado" <?php if($row['n_academico']=='licenciado') echo 'selected'; ?>>licenciado</option>
							
<option value="ingeneria" <?php if($row['n_academico']=='ingeneria') echo 'selected'; ?>>ingeneria</option>
				
<option value="ninguno" <?php if($row['n_academico']=='ninguno') echo 'selected'; ?>>ninguno</option>

<option value="Otros" <?php if($row['n_academico']=='Otros') echo 'selected'; ?>>Otros</option>
						</select>
					</div>
				</div>


				

				<div class="form-group">
					<label for="univ" class="col-sm-2 control-label">universidad</label>
			<div class="col-sm-10">
				<input type="tel" class="form-control" id="univ" name="univ" placeholder="universidad" value="<?php echo $row['univ']; ?>" >
					</div>
				</div>
			


				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="buscador.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>


			</form>
		</div>
	</body>
</html>
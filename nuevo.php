





<html lang="es">
	

	<head>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Registro</title>
<!-- librerias -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		
		<script  src="js/jquery-3.1.1.min.js"></script>
		
		<script src="js/bootstrap.min.js"></script>	
		
        <script type="text/javascript" src="js/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- comprobar cedula  -->


<!-- calendario -->

    </head>

	 
	 <style>
	 .iframe#contenido{
	
	
	
	width: 82%;
	height: 100%;
	
	
	position: absolute;
	
}
    #myModal{

      width: 80% !important;
      height: 80% !important;
    }
    	 </style>
	


	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Nuevo Registro</h3>
			</div>
			
<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="on">

<!-- mensaje de  si registro o no  -->

 <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        
                        <div class="alert alert-danger text-center" style="display:none;" id="error">
                            <strong>Adventencia: </strong>Debe completar todos los campos
                        </div>

                        <div class="alert alert-success text-center" style="display:none;" id="exito">
                            <strong>Formulario Completo  </strong>
                        </div>  
                    </div>

<!-- NOMBRE  -->
			<div class="form-group">

	<label for="nombre" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-8">

		<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Primer Nombre, Segundo Nombre" minlength="6"  maxlength="50"   onkeyup="validacion('nombre');"  autofocus/>
						<span class="help-block"></span> 
                         
					</div>
				</div>
<!-- APELLIDO -->

	<div class="form-group">

		<label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-8">
					
			<input type="text" class="form-control" minlength="6"  maxlength="50" id="apellidos" name="apellidos" placeholder="Primer Apellidos, Segundo Apellidos" onkeyup="validacion('apellidos');" > 
						<span class="help-block"></span>
                         
					</div>
				</div>

<!-- CEDULA  -->
				<div class="form-group">

		<label for="cedula" class="col-sm-2 control-label">Cédula</label>
					<div class="col-sm-8">
					
						<input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese la  Cédula de Identidad  " onkeyup="validacion('cedula');" minlength="7" maxlength="8">
                            <span class="help-block"> </div></span><div id="Info">
					</div>
				</div>
    <!-- calendario -->
                <div class="form-group">

				 <label for="fecha" class="col-sm-2 control-label" >Fecha de Nacimiento</label>

				  <div class="col-sm-3" id="fecha">
      
                    <input type="date"   name="fecha" id="fecha"  min="1946-10-08" max="2001-10-08" oninput="edad(this.value)"  onclick="edad(this.value)" oninput="validacion('edad1');" onblur="edad(this.value)" />  <span class="help-block"></span>
                     </div> 

                     <script language="JavaScript">
                     function edad(Fecha){
                     fecha = new Date(Fecha)
                     hoy = new Date()
                     ed = parseInt((hoy -fecha)/365/24/60/60/1000)
                     document.getElementById('edad1').value =  ed  
                     }
                     </script>
 <!-- edad -->

                 <div >

				 <label for="edad1" class="col-sm-1 control-label" class="form-group has-error has-feedback">Edad:</label>
				  
				  <div class="col-sm-4">
                    
                 <input type="text"  class="form-control" value="" id="edad1" name="edad1" placeholder=""  oninput="validacion('edad1');" readonly >
                 <span class="help-block"></span>
                </div>
                </div>
                </div>

<!-- sexo  genero -->
				<div class="form-group">
				<label for="genero" class="col-sm-2 control-label">Genero</label>
					
					<div class="col-sm-8">

				   <label class="radio-inline col-sm-4">
						<input type="radio"  id="male" style="width:20px;height:15px; margin-right: 15px" name="genero" value="Masculino" onclick="validacion(' genero')"> Masculino
						</label>

				    <label class="radio-inline">
					<input type="radio" style="width:15px;height:20px" id="female" name="genero" value="Femenino"  onclick="validacion('genero')">  Femenino 
						</label>
						
						
					</div>
				</div>
<!-- telefono -->	

				<div class="form-group">

					<label for="telefono" minlength="11" class="col-sm-2 control-label">Teléfono</label>
					

					<div class="col-sm-8">
					

                    	<input type="tel" value="" class="form-control" id="telefono" name="telefono" placeholder="Ingrese Número de Teléfono Fijo" maxlength="11" onkeyup="validacion('telefono');" >
                            
			<span class="help-block"></span>
					</div>


				</div>

<!-- celular -->
				<div class="form-group">

	<label for="celular" class="col-sm-2 control-label">Celular</label>
					<div class="col-sm-8">
					
<input type="tel" value="" minlength="11" class="form-control" id="celular" name="celular" placeholder="Ingrese Número de Teléfono Móvil"  maxlength="11"  onkeyup="validacion('celular');" ><span class="help-block"></span>
					</div>
				</div>

<!-- correo -->
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-8">

						<input type="email"  class="form-control" id="email" name="email" placeholder="Correo Electronico" maxlength="50" onkeyup="validacion('email');" >
                            <span class="help-block"></span>  
					</div>
				</div>

<!-- direccion -->
				<div class="form-group">

					<label for="direccion" class="col-sm-2 control-label">Dirección</label>
					
					<div class="col-sm-8">
					
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese Dirección " maxlength="40" minlength="10" onkeyup="validacion('direccion');" >
                            <span class="help-block"></span>  
					</div>
				
				   </div>

<!-- nivel acandemico -->
		<div class="form-group">

		<label for="n_academico" class="col-sm-2 control-label">Nivel Académico </label>
		

		<div class="col-sm-8">
						<select  id="n_academico" name="n_academico" class="form-control" onchange="validacion('n_academico');" >
						
						<option value="">Seleccioné un Valor</option>
					    <option value="bachiller">Bachiller</option>
					    <option value="Tecnico medio">Técnico Medio </option>
						<option value="Tecnico superior">Técnico Sperior </option>
						<option value="licenciado">licenciado</option>
						<option value="ingeneria">Ingeniería</option>
						<option value="Otro">Otro</option>
						</select>

					</div>
				   </div>
           <span class="help-block"></span> 
<!-- universidad 			

				<div class="form-group">
					<label for="univ" class="col-sm-2 control-label">universidad</label>
			<div class="col-sm-8">
				<input type="tel" class="form-control" id="univ" name="univ" placeholder="universidad"  >
					</div>
				</div>-->   



<!-- boton guardar  -->


				<div class="form-group">

	<div class="col-sm-offset-2 col-sm-9">
	         <a href="bienvenido.php" style=" margin:2px 0px 2px 06px;" class="btn btn-danger col-sm-3"><span class="glyphicon glyphicon-salir"></span>Salir</a>
	        
        <button type="reset" class="btn btn-default col-sm-3" style=" margin:2px 30px 2px 30px;" value="Reset"><span class="glyphicon glyphicon-trash"></span>Limpiar</button>
        
	<button type="submit" id="boton" onclick=" return verificar();" class="btn btn-primary col-sm-3"> <span class="glyphicon glyphicon-saved"></span> Guardar</button>   

              
						
					</div>
				</div>
			</form>
		</div>







	



  <!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div  class="modal-dialog modal-lg" >
      <div class="modal-content" class="form-group"> 
        <div class="modal-header">

          
        </div><iframe src="recaudos.php" name="mainFrame" id="recaudos" title="mainFrame" height="100%" width="100%" /></iframe>
       
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Regresar</button>
        </div>
      </div>
    </div>
  </div>
</div>









<!--validacion de campos -->
<script src="js/jquery-1.11.2.js"></script>

   <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
 <script type="text/javascript">

        var v=true;
        $("span.help-block").hide();

        function verificar(){

            var v1=0,v2=0,v3=0,v4=0,v5=0,v6=0,v7=0,v8=0,v9=0,v10=0;
            v1=validacion('nombre');
            v2=validacion('apellidos');
            v3=validacion('cedula');
            v4=validacion('email');
            v5=validacion('genero');
            v6=validacion('telefono');
            v7=validacion('celular');
            v8=validacion('direccion'); 
            v9=validacion('n_academico');
            v10=validacion('edad1');
            if (v1===false || v2===false || v3===false || v4===false || v5===false || v6===false || v7===false || v8===false || v9===false || v10===false){
                 $("#exito").hide();
                 $("#error").show();
return false
            }else{
                 
                $("#error").hide();
                $("#exito").show();
                return true;

                
            }

            total=v1+v2+v3+v4+v5+v6+v7+v8+v9+v10;
            if (v && total>=9) {
                $("#error").hide();
                $("#exito").show();
                
            return true;
                
            }else{
                 $("#exito").hide();
                 $("#error").show();
                 return false;
            }
            validacion('nombre');
            validacion('apellidos');
            validacion('cedula');
            validacion('email');
            validacion('genero');
            validacion('telefono');
            validacion('celular');
            validacion('direccion');
            validacion('n_academico');
            validacion('edad1');
            
            if (v) {
                alert("los campos estan validados")
            }
            else{
                alert("los campos no estan validados");
            }

        } 
        
        function validacion(campo){
            var a=0;
            

//nombreeeeeeeeeeeeeeeeeeeeeeeeeee

  if (campo==='nombre'){
                nombre = document.getElementById(campo).value;
                
                if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo Vacío ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                    
                }
                
                 if(  /[1-9]/.test(nombre) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("No se Permiten Caracteres Numéricos ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }


                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }
//apellidooooooooooooooooooooooo
             if (campo==='apellidos'){
                apellidos= document.getElementById(campo).value;
                if( apellidos == null || apellidos.length == 0 || /^\s+$/.test(apellidos) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo Vacío").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
  if(  /[1-9]/.test(apellidos) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("No se Permiten Caracteres Numéricos ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                    

                }

                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }
//cedulaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            if (campo==='cedula'){
                cedula = document.getElementById(campo).value;
                if( cedula == null || cedula.length == 0 || /^\s+$/.test(cedula) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo Vacío").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                   
                }




                else
                {
                    if(isNaN(cedula)) {

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("No Acepta letras").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");

              
                        return false;
                    }
                    else{

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
             
                        return true;
                    }
                    
                    
                }
                
            }
//<--calendario edad -->
           if (campo==='edad1')
            {
                edad1 = document.getElementById(campo).value;
               
                if(  /[a-z]/.test(edad1) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese la Fecha de Nacimiento ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    }
                 if( edad1 == null || edad1.length == 0 || /^\s+$/.test(edad1) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo Vacío ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                    
                }
                    else{

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
             
                        return true;
                    }
                     }

 if (campo==='fecha')
            {
                fecha = document.getElementById(campo).value;
               
                if(  /[a-z]/.test(fecha) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese la Fecha de Nacimiento ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    }

                     else{

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
             
                        return true;
}
}
//generooo masculino  femenino 
 if (campo==='genero'){
                opciones = document.getElementsByName(campo);
                var seleccionado = false;
                for(var i=0; i<opciones.length; i++) {    
                  if(opciones[i].checked) {
                    seleccionado = true;
                    break;
                  }
                }
                 
                if(!seleccionado) {
                    $('#male').parent().parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#male').parent().parent().next().append("<span id='sexo'  class='glyphicon glyphicon-remove form-control-feedback'></span>");


                    return false;
                }
                else{
                    $("#sexo").remove();
                    $('#male').parent().parent().parent().attr("class", "form-group has-success");
                    return true;
                }
            }


//telefonoooooooooooooooooooooooooooooooooooooooo
if (campo==='telefono'){
                telefono = document.getElementById(campo).value;
                if( telefono == null || telefono.length == 0 || /^\s+$/.test(telefono) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo Vacío").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else
                {
                    if( isNaN(telefono)) 
                    {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Sólo Caracteres Númericos").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                    }  

                    
                    else{
                        if (!(/^\d{11}$/.test(telefono))) 
                        {
                            $("#glypcn"+campo).remove();
                            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#'+campo).parent().children('span').text("Numero de Teléfono Incompleto O Exediste la cantidad de Caracteres (11)").show();
                            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                            return false;
                        }
                        
                        else{
                            $("#glypcn"+campo).remove();
                            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                            $('#'+campo).parent().children('span').hide();
                            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    
                              return true;
                        }
                        
                    }  
                } 
            }
//celulaaaaarrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr
 if (campo==='celular'){
                celular = document.getElementById(campo).value;
                if( celular == null || celular.length == 0 || /^\s+$/.test(celular) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo vacío ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else
                {
                    if( isNaN(celular)) 
                    {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Sólo Caracteres Numéricos").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                    }  

                    
                    else{
                        if (!(/^\d{11}$/.test(celular))) 
                        {
                            $("#glypcn"+campo).remove();
                            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#'+campo).parent().children('span').text("Número de Teléfono Incompleto ").show();
                            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                            return false;
                        }
                        else{
                            $("#glypcn"+campo).remove();
                            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                            $('#'+campo).parent().children('span').hide();
                            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    
                            return true;
                        }
                        
                    }  
                } 
            }


//correooooooooooooooooooooooooooooooooooooooooooooooooooooooo
            if (campo==='email'){
                email = document.getElementById(campo).value;
                if( email == null || email.length == 0 || /^\s+$/.test(email) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("El Campo esta Vacío, Ingrese un Correo").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        
                    return false;
                    
                }
                else{
                    if (!(/\S+@\S+\.\S+/.test(email))) {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Ingrese un Correo Electrnico Valido").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                    }
                    else{
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    
                        return true;
                    }
                }

             }


//direccioooon
             if (campo==='direccion'){
                direccion= document.getElementById(campo).value;
                if( direccion == null || direccion.length == 0 || /^\s+$/.test(direccion) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo Vacío").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }

 //nivel academico
             if (campo==='n_academico'){
                indice = document.getElementById(campo).selectedIndex;
                if( indice == null || indice == 0 ) {
                    $('#n_academico').parent().parent().attr("class", "form-group has-error");
                    return false;
                }
                else{
                    $('#n_academico').parent().parent().attr("class", "form-group has-success");
                    return true;

                }
            
            }
}

            
           
      
    </script>
    <script>
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
                    
                    
         
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
          

        return false;
    
    alert("No se Permiten Números ");

}

function limpia() {
    var val = document.getElementById("nombre").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("nombre").value = '';

                    
      
    }
}
</script>

	</body>
</html>

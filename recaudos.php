
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

 //$r_cedula = $_GET['id'];
$r_cedula =$_GET['id'];
  

?>


<html lang="es">
  <title>Recaudos</title>

  <head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo registro</title>
<!-- librerias -->

      
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script  src="js/jquery-3.1.1.min.js"></script>
   <script type="text/javascript" src="js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>



<!-- calendario -->

    <!-- para validar solo numeros -->
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


<script src="js/validacion.js"></script>

<style type="text/css">
body {

}
table{
  width: 81%;
  height: 100%;
  position: relative;
  box-shadow: inset -1px -3px 7px 0px black;
}

</style>

</head>

<form class="form-control-responsive  " id="formulario" method="POST"  action="recaudosguardar.php " autocomplete="on" onkeypress="validacion('formulario');" >

<input type="text" name="r_cedula" id="r_cedula" value="<?php echo $r_cedula; ?>" hidden>

 <!-- formulario -->
<div class="tg-wrap table-responsive " style=" margin:2px 0px 2px 1px;">
         <h1><center>Formulario de Recaudos </h1>


<table class="table table-condensed table table-hover" >
 
<!--11111111111111111111111  -->
  <tr>

    <td class="tg-uiv9" colspan="2">Planilla de solicitud de registro</td>
     <td class="tg-yw4l"> 
     No <input type="radio" checked="checked" name="p_s_registro"  id="No" value="No">
     </input>
</td>
<td class="tg-yw4l"> 
    Si <input type="radio" id="si" name="p_s_registro" value="Si"></input>
    
    </td>
  
<!--11111111111111111111111  -->

    </tr>
  <tr>
<td class="tg-uiv9" colspan="2">Constancia de asistancia al taller de Induccion(vigente)</td>
<td class="tg-yw4l">
     No <input type="radio" name="c_a_taller" checked="checked" value="No" ></input></td>
</td>
<td class="tg-yw4l">
     Si <input type="radio" id="si" name="c_a_taller"   value="Si" ></input></td>
</td>
  </tr>

<!--11111111111111111111111  -->
  <tr>
<td class="tg-uiv9" colspan="2">fotocopia de cedula ampiada </td>
<td class="tg-yw4l">

No <input type="radio" name="f_cedula" checked="checked" value="No" ></input></td>
</td>
<td class="tg-yw4l">

Si <input type="radio" name="f_cedula" value="Si" ></input></td>
  </tr>
<!--11111111111111111111111  -->
    <tr>
    <td class="tg-yw4l" colspan="2">Copia y fondo negro de Titulo  bachiller (Autenticado)</td>
    <td class="tg-yw4l">
    No <input type="radio" name="c_f_bachiller"  checked="checked" value="No" ></input></td>
    
    <td class="tg-yw4l">

    Si <input type="radio" name="c_f_bachiller" value="Si" ></input></td>
  </tr>

<!--superios   -->
  <tr>
  <td class="tg-yw4l" colspan="2">Copia y fondo negro de Notas de educacion superior</td>

  <td class="tg-yw4l">

  No <input type="radio" name="c_f_e_superior" checked="checked" value="No" ></input></td>
 
  <td class="tg-yw4l">

  Si <input type="radio" name="c_f_e_superior"  value="Si" ></input></td>
 </tr>

  <!--11111111111111111111111  -->
  <tr>
  <td class="tg-yw4l" colspan="2">Copia y fondo negro de Notas de educacion superior</td>

  <td class="tg-yw4l">

  No <input type="radio" name="c_f_e_media" checked="checked" value="No" ></input></td>

  <td class="tg-yw4l">

  Si <input type="radio" name="c_f_e_media"  value="Si" ></input></td>
 </tr>
<!--11111111111111111111111  -->
<tr>
  <td class="tg-yw4l" colspan="2">Copia simple y fondo negro Notas educación media diversificada (Autenticado)</td>
  <td class="tg-yw4l">
  No <input type="radio" name="c_notas_m_diversificado" value="No" checked="checked" "value="No" ></input></td>
  <td class="tg-yw4l">
  SI <input type="radio" name="c_notas_m_diversificado" value="Si" ></input></td>
 </tr>
<!--11111111111111111111111  -->
  <tr>

    <td class="tg-yw4l" colspan="2">Constancias de trabajo originales</td>
   <td class="tg-yw4l">
   No <input type="radio" name="c_trabajo"  checked="checked" value="No" ></input></td>
 <td class="tg-yw4l">
   Si <input type="radio" name="c_trabajo" value="Si" ></input></td>


<!--soportesssss  si o No -->
  
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="2">¿Posee  otros soportes?</td>
    <td class="tg-yw4l">No <input type="radio" checked="checked"  name="soportessi" value="No" ></input></td>

    <td class="tg-yw4l">Si <input type="radio" onclick="cambiarDisplay('oculto')"  name="soportessi" value="Si" ></input></td>



  </tr>
  <!--soportesssss  -->
  <tr>
    <td class="tg-yw4l  " colspan="4">
    <span id="oculto" style="display:none;">
    <input class=" form-control col-sm-12"   type="text" id="soportes2" value="no" placeholder="otros Soportes" name="soportes2"/></span>
    
  </tr>
  <!-- comprobante del banco  si o No  -->
  <tr>
    <td class="tg-yw4l" colspan="2">¿Comprobante de Depósito Bancario?</td> 
    
    <td class="tg-yw4l">No<input type="radio"  checked="checked" name="depositobopcion" value="NO" ></input></td>

     <td class="tg-yw4l">Si<input type="radio"   name="depositobopcion" value="Si" ></input></td>
 
  </tr>
  <!-- comprobante del banco  Nombre  -->
   
   
 <tr>
   <td " colspan="4">
   
     <label for="oculto1" class="col-xs-3 control-label">
     Nombre del Banco:</label> 
     <input type="text" value="" required  class="tg-yw4l col-xs-3" id="nom_banco"  pattern="[1-9]*" name="nom_banco" />
 
<!-- comprobante del banco  numero  -->
  

     <label for="nu_deposito" class="tg-yw4l col-xs-1">Numero:   </label><input type="text"  class=" col-xs-5"  id="nu_deposito" name="nu_deposito" required   onkeydown="return validarNumeros(event)"/ >
      

      <!-- comprobante del banco  revisado  -->
  <br>
  
 <label for="revisado" class="col-sm-2 control-label" style="  margin: 15px 1px 30px 0px;">  Revisado  Por:</label>  <input type="text" style="  margin: 15px 2px 30px 0px;" class=" col-xs-5" id="revisado"  name="revisado" required  pattern="[1-9]*" /></span></td> 
      </tr>
      </table>  


      <!-- botonesssss  -->

 <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            
            
            
            <button type="reset" class="btn btn-danger col-sm-2" style=" margin:2px 30px 2px 50px;" value="Reset"><span class="glyphicon glyphicon-trash"></span>Limpiar</button>
            
            <button type="submit" id="enviar" class="btn btn-primary col-sm-2""><span class="glyphicon glyphicon-floppy-saved"></span>Guardar</button>
            </div>
 

       <!-- id  de  registro  -->

    




</div>
</form>
      </body>


 <script>

function cambiarDisplay(id) 
{
  if (!document.getElementById) 
    return false;
  fila = document.getElementById(id);
  if (fila.style.display != "none") 
    fila.style.display = "none"; //ocultar
  else 
    fila.style.display = ""; //mostrar
}

</script>

   

        
      
</html>

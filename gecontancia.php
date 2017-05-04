<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php

  require 'conexion.php';
  
  $where = "";
  
  if(!empty($_POST))
  {
    $valor = $_POST['cedula'];
    if(!empty($valor)){
      $where = "WHERE cedula LIKE '%$valor%'";
      
      
    
    }
  }
  $sql = "SELECT * FROM acreditado $where";
  $resultado = $conexion->query($sql);
  
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Constancia  </title>
    <meta charset="utf-8"/>
    <meta name="Author" content="Hugui Dugui www.huguidugui.wordpress.com"/>
    <meta rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script  src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/misestilos.css"/>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  </head>
   
  

  <body>
    <div class="wrap">
      <header>
        <a href="../index.php"><img src="img/logoSS.png"/> </a>
        <h1>CONSTANCIA DE ASISTENCIA AL TALLER <br> DE INDUCCIÓN  (ACREDITACIÓN POR EXPERIENCIA) </h1>
      </header>
      
      <section id="formulario">

        <form   action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validacion()" onsubmit="return verificar()" >
           

              
             <div class="form-group">

          <label for="cedula" ></label>
          
          <div class="col-sm-10">
          
            <input type="text" class="form-control " id="cedula" name="cedula" placeholder="   Ingrese  Cédula de Indentidad"  onkeyup="validacion('cedula');">
                            <span class="help-block"></span>
                         
            </div>
            <br>
            <br>
            <div id="fecha">
            
            <label >Ingrese la Fecha de Realizacion del Curso </label> <br><br><br>
              <select name="dia" id="dia">
              <option selected>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
              </select>

 
              <p class="de">de</p> 
  
              <select name="mes" id="mes">
              <option>Enero</option>
              <option>Febrero</option>
              <option>Marzo</option>
              <option>Abril</option>
              <option>Mayo</option>
              <option>Junio</option>
              <option>Julio</option>
              <option>Agosto</option>
              <option>Septiembre</option>
              <option>Octubre</option>
              <option>Noviembre</option>
              <option>Diciembre</option>
              </select>
  
              <p class="de">de</p> 

              <select name="anio" id="anio">
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              </select>
          <div> <br>

           <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">

          <button type="reset"><span class="glyphicon glyphicon-trash col-sm-1"></span>Limpiar </button> 
            
            
          
  <button type="submit" id="boton" onclick=" return verificar();" class="btn btn-primary "> 
         <span class="glyphicon glyphicon-file col-sm-2"></span> Buscar</button></div>
<table class="table table-striped">
          <thead>
            <tr>
            

              <th>ID</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Cédula</th>
               <th>Genero</th>
              

              <th></th>
              <th></th>
            </tr>
          </thead>
          
          <tbody>
            <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
              <tr>
              
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['cedula']; ?></td>
                <td><?php echo $row['genero']; ?></td>
                
                
        <td><a href="REPORTES/contanciacurso.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                
          

                
              </tr>
            <?php } ?>
              </tbody>
        </table>
        </form>
      </section>
    </div>
    <script src="js/jquery-1.11.2.js"></script>

   <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
 <script type="text/javascript">

        var v=true;
        $("span.help-block").hide();

        function verificar(){

            var v1=0;
           
            v1=validacion('cedula');
            
            if (v1===false ) {
                 $("#exito").hide();
                 $("#error").show();
return false
            }else{
                 
                $("#error").hide();
                $("#exito").show();
                return true

                
            }

            total=v1;
            if (v && total>=1) {
                $("#error").hide();
                $("#exito").show();
                
            return true
                
            }else{
                 $("#exito").hide();
                 $("#error").show();
                 return false
            }
            validacion('nombre');
            
            
            if (v) {
                alert("los campos estan validados")
            }
            else{
                alert("los campos no estan validados");
            }

        } 
        
        function validacion(campo){
            var a=0;
            

//cedulaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            if (campo==='cedula'){
                cedula = document.getElementById(campo).value;
                if( cedula == null || cedula.length == 0 || /^\s+$/.test(cedula) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo Vacio").show();
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
    
    alert("HelloHow are you?");

}

function limpia() {
    var val = document.getElementById("cedula").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("cedula").value = '';

                    
      
    }
}
</script>

  </body>
</html>
  

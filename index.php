
<html >
<head>
  <meta charset="UTF-8">
  <title></title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style1.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript"></script>


  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      

  
</head>

<body background="">
  
<div class="container">
 <center> <p> Sistema de Registro de Estudiantes <br> UNEARTE<br>  <span>Acreditación  Por Experiencia</span></p><center>
 
  
</div>
<div class="form">
  <div class="thumbnail"><img src="img/hat.svg"/></div>


<!--registro de usuario-->
  <form action="fphp/rusuario.php" class="register-form" method="post"  autocomplete="on">
    

    <input type="text" placeholder="Nombre de Usuario" name="usuario" required="required" >
    
    <input type="password" placeholder="Contraseña" name="clave1" required="required" />

    <input type="password" placeholder="Confirme Contraseña" name="clave2" required="required" />
    
    <input type="email" placeholder="Correo Electrónico" name="email" required="required" />

    <!--input type="password" placeholder="clave del producto" name="claveproducto" required="required" /-->
    
    <button  type="submit">CREAR</button>
    
   
    <p class="message">Ya Tiene Cuenta ?<a href="#">Ingresa Aquí</a></p>
 
  </form>


<!--usuario-->
   <form action="validar.php"  method="post" autocomplete="off">
<div class="input uname">


    <input   type="text"  placeholder=" &#128272;Usuario "        id="usuario" name="usuario" required="required">
</div>
<!--clave-->

<div class="input pass">
    <input type="password" class="glyphicon glyphicon-user" placeholder="&#128272;Contraseña" name="clave" required="required">
   </div>
    <button type="submit" id="login" >Entrar</button>

    <p class="message">Registrar Nuevo Usuario <a href="#">Aquí</a></p>
  </form>
</div>
<!--espan de login-->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>



<!--effecto de movimiento-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

  $("#login").click(function(){

    if($("#usuario").val() == ""){

      $(".input").addClass("error");
      $("#usuario").css({"border":"2px solid blue"});
    }
    if($("#password").val() == ""){
      $(".pass").addClass("error");
    }

  })
  $(".input").click(function(){
    $(".input").removeClass("error");
    $("#usuario").css({"border":"2px solid "});
  })
})
</script>

</body>
</html>


<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<html lang="es">

<head>

<title>UNEARTE CECA ANZOÁTEGUI</title>

<meta http-equiv="content-type" content="text/html charset=8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
		
	
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	

<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link href="css/bootstrap-theme.css" rel="stylesheet">

<script type="text/javascript">

function comprobarScreen()
{ if(window.screen.availWidth <= 640)
{window.parent.document.body.style.zoom="62%";}
if(window.screen.availWidth == 800)
{window.parent.document.body.style.zoom="75%";}
if(window.screen.availWidth == 1024)
{window.parent.document.body.style.zoom="75%";}
if(window.screen.availWidth >= 1280)
{window.parent.document.body.style.zoom="75%";}
}
</script>
<script  src="js/jquery-3.1.1.min.js"></script>

		
		
		
</head>

<body onload="comprobarScreen();">


<div  id="logo"   >
<div class="slider" >

<ul >
  <li><img  src="img/1.png "  alt=""> </li>

  <li><img src="img/2.png" alt=""></li>
  
  <li><img src="img/1.png"  alt=""></li>
  
  <li><img src="img/2.png" alt=""></li>

</ul>

</div>

</div>


<iframe onload="comprobarScreen();" src="bienvenido.php" name="mainFrame" id="contenido" title="mainFrame"  /></iframe>




<div id="menu">
  <ul>
      <a href="/unearte/nuevo.php" class="shortcut" target="mainFrame" > <li id="registro"><i></i><span class="shortcut-label">Registro <span class="glyphicon glyphicon-file" aria-hidden="true"></span> </span> </li></a> 

      																	

	  <a href="/unearte/acreditar.php" class="shortcut" target="mainFrame" > <li id="registro"><i></i><span class="shortcut-label">Acreditar</span> </li></a> 
      
      <a href="/unearte/buscador.php" class="shortcut" target="mainFrame" ><li id="consultas"> <i></i><span class="shortcut-label">Consultas</span> </li></a>

       <a href="/unearte/reportero.php" class="shortcut" target="mainFrame" > <li id="registro"><i></i><span class="shortcut-label"> Reportes </span> </li></a> 


	  <a href="/unearte/gecontancia.php" class="shortcut" target="mainFrame" > <li id="registro"><i></i><span class="shortcut-label">Constancia </span> </li></a> 
	  
	   <a href="x_full_calendar/x_full_calendar/fullcalendar.html" class="shortcut" target="mainFrame" ><li id="calendario"> <i></i><span class="shortcut-label">Calendario</li>

	   <a  href="index.php" class="shortcut"   ><li id="calendario"> <i></i><span class="shortcut-label">SAlir</li>
</ul>

	</div>




</div>
</body>
</head>
</html>

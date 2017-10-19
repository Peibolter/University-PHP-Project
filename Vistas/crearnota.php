<?php
class crearnota{

		function cargar($texto){
?>

<!DOCTYPE html>
<html lang="es">
		<head>
		<meta charset ="UTF-8">

			<title>CrearNota</title>
			<link rel="stylesheet" href="../css/estilos.css">
			<!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
			<link href="https://fonts.googleapis.com/css?family=Amatica+SC" rel="stylesheet">
			<script type="js/jquery.js"></script>
		<script type="js/bootstrap.min.js"></script>
		</head>
		<body>

		<header class="header2" >
			<div class="wrapper">
				<div class="logo">
				<a href="../Controlador/ControladorNota.php?Principal" class="thumb pull-left">
				<img  class="fotocabecera" src="../img/logoDayNote.PNG" alt="" >
				</a>
				</div>
				<nav class="cabecera">
				<a href="../Controlador/ControladorNota.php?CrearNota">Crear Nota</a>
				<a href="../Controlador/ControladorNota.php?ListarNota">Notas</a>
				<a href="#">Salir </a>
				</nav>
			</div>
		</header>	
		<section class="main">
			
    		<form class="altaform" action="../Controlador/ControladorNota.php?AltaNota" method="post">

    			<fieldset>

    			<legend align="left">Crear Nota</legend>
			  			<div class="contenedorcrearnota">
			    			<p><a>Titulo </a><input class="crear" name="titulo" type="text" placeholder="Introduzca Titulo" required></p>
			  		
						 <textarea name="descripcion" required maxlength="200" class="form-control" id="exampleTextarea" rows="6" cols="26" placeholder="Escribe tus notas"></textarea>
						 <br>
						  <input  type="submit" value="Guardar">
						  </div>
						  <p class="errorinsertado"><?php if($texto=="error")echo"Imposible Añadir nota";?> </p>
						  <!--<p class="exito"><?php //if($texto=="exito")echo"Nota Creada";?> </p>-->
    			</fieldset>
    		</section>
    		</body>

		
	</html>

	<?php  }} ?>
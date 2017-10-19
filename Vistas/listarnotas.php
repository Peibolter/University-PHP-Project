<?php 

class listadoNotas{

		function cargar($datos,$texto){


?>
<!DOCTYPE html>
<html lang="es">
		<head>
		<meta charset ="UTF-8">

			<title>Header</title>
			<link rel="stylesheet" href="../css/estilos.css">
			<link href="https://fonts.googleapis.com/css?family=Amatica+SC" rel="stylesheet">
			<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!--libreia para iconos-->
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><!--libreia para iconos de google-->
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
				<a href="../Controlador/ControladorNota.php?Salir">Salir </a>
				</nav>
			</div>
		</header>		
		<section class="listadosection"> 
			<p class="exito"><?php if($texto=="exito")echo"Nota Creada";elseif($texto=="exitoborrar")echo"Nota Borrada";elseif($texto="exitomodificar")echo"Nota Modificada";?> </p>
			<p class="error"><?php if($texto=="errorborrar")echo"Error al borrar"?> </p>
			<?php foreach($datos as $fila)
			{  ?>
    		<form class="form-listarnotas">
    			<fieldset class="fieldset-listarnotas">
    			<legend align="left">Nota</legend>
			  		
			  		<div class="container well">

			    		<a class="a-lista" onClick="return confirm('¿Estas Seguro de que deseas eliminar esta nota?);"><?= $fila['nombre']; ?></a><a href=../Controlador/ControladorNota.php?Eliminar=<?= $fila['id']; ?> ><i class="material-icons">delete</i></a> <a href=../Controlador/ControladorNota.php?Modificar=<?= $fila['id']; ?> > <i class="material-icons">create</i></a> <a href=../Controlador/ControladorNota.php?CompartirNota=<?= $fila['id']; ?> ><i class="material-icons">folder_shared</i></a>
			    		<input type="hidden" name="id" value=<?= $fila['id'];?> />
			    		<p class="Descripcion"><?= $fila['contenido']; ?></p>
						</div>
						
    			</fieldset>
    			</form>
    		<?php  }?>
    			</section>
    		</body>
				
		
	</html>

<?php 
	}
}
	?>
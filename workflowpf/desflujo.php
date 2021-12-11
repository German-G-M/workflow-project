<?php
	session_start();
	include "cabecera.inc.php"; // incluimos la cabecera
?>
<html>
	<head>
		<title>Elecciones CEI</title>
	</head>
<body>
	<?php
	include "conexion.inc.php";
	// tengo que ver en que flujo estoy (2 variables de entrada)
	$flujo=$_GET["flujo"];
	$proceso=$_GET["proceso"];


	//necesito seleccionar 
	$sql="select * from flujoproceso where flujo='".$flujo."' and proceso='".$proceso."'";
	$resultado=mysqli_query($conn, $sql);
	//print_r($resultado); //para ver si muestra resultado
	$fila=mysqli_fetch_array($resultado);
	//print_r($fila); // para probar que se nos muestre la fila seleccionada

	$tipoproceso=$fila['tipo'];// sacamos el tipo de proceso para manejar el inicio y el final
	include $fila['formulario'].'.cab.inc.php'; //aqui se llaman las cabeceras de cada formulario y recupera datos de la BD
	?>

	
	 <!-- Si queremos poner un boton o algo,  el cambio solo se produce en este segmento (en <iframe>)-->
	<!--<iframe src="fechahora.inc.php"></iframe>-->
	<!--<iframe src="<?php //echo $fila['formulario'].'.inc.php' ?>"></iframe>-->
	<form action="motflujo.php" method="GET">
		
		<?php include $fila['formulario'].'.inc.php';?> <!--este include es en lugar del iframe. me va a mostrar las diferentes pantallas(formularios)  -->
		<br>
		
		<input type="hidden" value="<?php echo $fila['formulario'];?>" name="formulario"/><!-- salvamos el nombre del archivo-->
		<input type="hidden" value="<?php echo $flujo?>" name="flujo"/>
		<input type="hidden" value="<?php echo $proceso?>" name="proceso"/>
		<?php  
		if ($tipoproceso=='I')
		{
			//si estamos en el proceso inicial, que no se muestre el boton anterior
			echo '<input class="boton" type="submit" value="Siguiente" name="Siguiente"/>';
		}
		else{
			if($tipoproceso=='F'){
				//si estamos en el proceso final, que no se muestre el botón siguiente
				echo '<input class="boton" type="submit" value="Anterior" name="Anterior"/>';
			}
			else{
				//si no es ni inicial ni final, que muestre ambos botones
			echo '<input class="boton" type="submit" value="Anterior" name="Anterior"/>';
			echo ' ';
			echo '<input class="boton" type="submit" value="Siguiente" name="Siguiente"/>';
			}
			
		}
		
		?>
<!--
		<input type="submit" value="Anterior" name="Anterior"/>
		<input type="submit" value="Siguiente" name="Siguiente"/>
	-->
		<br>
		<br>
		<a href="bandeja.php">Volver a mi bandeja </a>
	</form>
</body>
</html>
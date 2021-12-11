<?php
session_start();
include "conexion.inc.php";
$sql="select * from seguimiento where usuario='".$_SESSION["usuario"]."' "; //solo datos del usuario
$sql.="and fechafin is null"; // y procesos que no hayan acabado
$resultado=mysqli_query($conn, $sql);
?>
<?php
	include "cabecera.inc.php"; // incluimos la cabecera
?>
<style>
	table{
		margin:auto; /* para alinearlo al centro */
	}
	table,th,td{
		border:solid gray;
		border-collapse:collapse;
		text-align:center;
		padding:10px 50px;
		margin
		
	}
	th{
		font-weight:bold;
		color:white;
		background:#1d3557;
	}
	</style>
	<H2 style="text-align:left; color:#006d77; margin-left:30px">MI BANDEJA<H2>
<table>
<tr>
	<th>Tramite</th>
	<th>Flujo</th>
	<th>Proceso</th>
	<th>Fecha Inicio</th>
	<th>Accion</th>
</tr>
<?php
while($fila=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>".$fila["notramite"]."</td>";
	echo "<td>".$fila["flujo"]."</td>";
	echo "<td>".$fila["proceso"]."</td>";
	echo "<td>".$fila["fechainicio"]."</td>";
	echo "<td><a ";
	echo "href='desflujo.php?flujo=$fila[flujo]&proceso=$fila[proceso]'";// este link me llevará a desplegar flujo de acuerdo al flujo y proceso correspondiente
	echo ">Mostrar<a/></td>";
	echo "</tr>";
}
?>
</table>
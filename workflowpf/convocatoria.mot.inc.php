<?php
//$nombre=$_GET["nombre"]; // recuperamos el nombre que se escribió en el campo
$nombre=$_SESSION["usuario"]; //recuperamos el nombre del usuario en sesión
$sql_c="update academico324.alumno set nombre='".$nombre."' where ci=12"; // ponemos el nuevo nombre en la BD (lo modificamos/ lo actualizamos de a cuerdo al CI)

$resultado_c=mysqli_query($conn, $sql_c);
?>

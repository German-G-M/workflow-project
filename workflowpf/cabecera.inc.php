<?php
   //session_start();
    //include("conexion.php");
    //include("function.php");
    //$dato_usuario = check_login($conn); /*para saber si el usuario inició o no sesión. Si no inició sesión lo lleva a la pagina de iniciar sesión */
    //$dato_usuario = "Nombre Usuario"; /*para saber si el usuario inició o no sesión. Si no inició sesión lo lleva a la pagina de iniciar sesión */
    //$dato_usuario=$_SESSION["usuario"];
?>
<html>
<head>
<style>
    body{
        background:#e1e5f2;
        height:100%;
    }
    #cabecera{
        background:#1f7a8c;
        height: 100px;
        margin:40px auto 0px auto;
        width:900px;
        /*padding:20px;*/
    }
    #box{
        background-color:white;/*#e5e5e5; /*#0D676A */
        margin:5px auto;
        width: 60%; /* 400px;*/
        padding:20px;
        opacity:0.7;
        text-align:center;
        height: 900px;
        }
    .boton{
        padding:10px;
        width:180px;
        border-radius:20px;
        font-size:18px;
        text-align:center;
        border:solid #4ecdc4 4px;
        background-color:transparent;
        color:#1d3557;
        }
    .boton:hover{
        background-color:#4ecdc4;
        color:white;
        border:solid white 4px;
        }

     </style>
</head>
<body>
<div id="box" class="container">
    <div id="cabecera">
            <div style="float:left; margin:10px 10px 10px 50px;background:none";> <a href="index.php"><img style="width:80px;heigth:80px;float:left" src="logoinfo.png"> </a></div>
            <div style="float:left;text-align:right; margin:30px 20px 20px 30px;width:500px; color:white; font-size:20px;padding:5px"> Usuario: <?php echo $_SESSION['usuario'];?> </div>
            <div style="float:left;text-align:center;margin:30px 30px 20px 5px;width:150px; font-size:20px;border-width:1px;border:white;border-style:solid;padding:5px"><a style="color:white; text-decoration:none;"  href="index.php"> Cerrar Sesión </a></div>   
        </div>
        <br>
        <br>
 <!-- aqui empieza mi footer-->           
<!-- </div> //este div cierra el contenedor (donde va ir todo lo que trabaje)       
</body>
</html> -->
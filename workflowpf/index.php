<html>
    <!--  es el inicio de la aplicación: recibe el usuario y la contraseña para poder iniciar sesión-->

<head>
    <style>
        #boxinicio{
            background-color:#0D676A;/*#e5e5e5; /*#0D676A */
            margin:30px auto;
            width: 400px;
            padding:30px;
            opacity:0.7;
            text-align:center;
            color:white;
            font-weight:bold;
            font-size:22px;
            font-family:calibri;
        }
        #boton{
            
            font-weight:bold;
            width: 120px;
            height:30px;
            border-radius:10px;
            font-size:20px;
        }
        .campo{
            font-weight:bold;
            width: 350px;
            height:40px;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <br>
    <p style="text-align:center"><img src="logoinfo.png"></p>
    <h1 style="text-align:center; color:gray;font-family:calibri">Elecciones Generales Centro de Estudiantes de Informática (CEI)</h1>
    <div id=boxinicio>
        <form action="controlindex.php" method="GET">
        Usuario
        <input class="campo" type="text" name="usuario" value="">
        <br><br>
        Contraseña
        <input class="campo"  type="password" name="contrasenia" value="">
        <br><br><br>
        <input id="boton" type="submit" name="Aceptar" value="Ingresar">
        </form>
    </div>
</body>
</html>
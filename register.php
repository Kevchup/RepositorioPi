<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>GoldenBerry Trading</title>
    <meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <style type="text/css">

form{
    max-width: 400px;
    width: calc(100% - 40px);
    padding: 28px;
   background-color: #fff;
    border-radius: 5px;
    margin: auto;
}
form h3{
    margin: 20px 0;
}
form input{
    padding: 7px 10px;
    width: calc(100% - 22px);
    font-size: 17px;
    margin-bottom: 10px;
}
form button{
    padding: 15px 15px;
    width: calc(100%);
    font-size: 17px;
    margin: 20px 0;
    
}
form select{
    padding: 10px 5px;
    width: calc(68%);
    font-size: 17px;
    margin: 20px 0;
    
}
form p{
    margin: 0;
    margin-bottom: 1px;
    color: rgb(223, 4, 4);
    font-size: 14px;
}
</style>
</head>
<body>
	<header>
		<div class="logo-place"><img src="imagenes/gbtranding.png"></div>
	</header>
	<div class="main-content">
		<div class="content-page">
			<form action="servicios/register.php" method="POST">
                <h3>LLENA LOS CAMPOS PARA TU REGISTRO</h3>
                <input type="text" name="ID_P" placeholder="Cedula" pattern="[0-9]{6,10}" title="La cedula debe ser solo números y tener una longitud máxima de 10 caracteres" required>
                <input type="text" name="nombre" placeholder="Nombres" pattern="[a-zA-Z- ]{1,50}" title="En el nombre solo debe poner letras y tener una longitud máxima de 50 caracteres" required>
                <input type="text" name="apellido" placeholder="Apellidos" pattern="[a-zA-Z- ]{1,50}" title="En el apellido solo debe poner letras y tener una longitud máxima de 50 caracteres" required>
                <input type="text" name="telefono" placeholder="Teléfono">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="contraseña" placeholder="Contraseña">
                Tipo De Usuario  <select id="tipo"  name="tipo">
                    <option value="Productor">Productor </option>
                    <option value="Cliente">Cliente </option>
                </select>  
                <button type="submit">Registrate</button>
            </form>
            <br><br>
            
		</div>
	</div>
</body>
</html>
<?php
session_start();
session_destroy();
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
    padding: 10px;
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
        <br><br><br><br><br>    
			<form action="servicios/login.php" method="POST">
                <h3>INGRESAR</h3>
                <input type="text" name="email" placeholder="Correo">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <?php
                    if(isset($_GET['e'])){
                        switch($_GET['e']){
                            case '1':
                                echo '<p>Error de conexión</p>';
                                break;
                            case '2':
                                echo '<p>Email incorrecto</p>';
                                break;
                            case '3':
                                echo '<p>Contraseña incorrecta</p>';
                                break; 
                            default:
                                break;
                        }
                    }
                ?>  
                <button type="submit">Ingresar</button>
            </form>
            <form action="register.php" method="POST">
                <button type="submit">Registrate</button>
            </form>
            <br><br><br><br><br><br><br>
		</div>
	</div>
</body>
</html>
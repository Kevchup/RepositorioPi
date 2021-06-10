<?php
session_start();    
?>
<SCRIPT LANGUAGE="JavaScript">
history.forward()
</SCRIPT>
<!DOCTYPE html>
<html>
<head>
	<title>GoldenBerry Trading</title>
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
    margin: 5px 0;
    font-size: 15px;
    
}
form input{
    border-radius: 10px;
    padding: 7px 10px;
    width: calc(100% - 22px);
    text-align:center;
    font-size: 17px;
    margin-bottom: 10px;
}
form I input{
    border-radius: 10px;
    padding: 50px 100px;
    width: calc(100% - 22px);
    text-align:center;
    font-size: 17px;
    margin-bottom: 10px;
}
form button{
    padding: 15px 1px;
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
<?php include("diseños/header.php"); ?>
	<div class="main-content">
		<div class="content-page"><br><br>  
        <form action="servicios/publicacion.php" method="POST" enctype="multipart/form-data">
                <center><h3>Tu documento</h3></center>
                <input type="text" REQUIRED name="ID_P" value="<?=$_SESSION['ID_P']?>" readonly>
                <center><h3>Ingresa los datos</h3></center>
                <input type="text" REQUIRED name="titulo" placeholder="Título">
                <I><input type="text" REQUIRED name="descrip" placeholder="Descripción" required size="500"></I>
                <input type="text" REQUIRED name="cantidad" placeholder="Cantidad">
                <?php
                date_default_timezone_set('America/Bogota');
                $fecha=date("Y-m-d H:i:s");
                ?>
               <center><h3>Fecha actual </h3></center>
                <input type="datetime" name="fecha" value="<?=$fecha?>" readonly>
                <input type="file" REQUIRED name="imagen">
                <button type="submit">Publicar</button>
            </form>
			</div>
		</div>
	</div>
    <script type= "text/javascript" src="js/main-scripts.js"></script>
	<script type="text/javascript">
    </script>
</body>
</html>


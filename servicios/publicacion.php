<?php
include('_conexion.php');

$ID_P = $_POST["ID_P"];
$titulo = $_POST["titulo"];
$descrip = $_POST["descrip"];
$cantidad = $_POST["cantidad"];
$fecha = $_POST["fecha"];
$nombreimg=$_FILES['imagen']['name'];
$permitidos= array("image/jpg","image/jpeg","image/gif","image/png","image/JPG","image/JPEG","image/PNG");
$limite_kb=100;
if(in_array($_FILES['imagen']['type'],$permitidos) && $_FILES['imagen']['size']<=$limite_kb*1024)
{
$archivo=$_FILES['imagen']['tmp_name'];
$imagen='../imagenes/produc';
$imagen=$imagen."/".$nombreimg;
move_uploaded_file($archivo,$imagen);

$sql="INSERT INTO producto(ID_P,titulo,descrip,imagen,cantidad,fecha) VALUES ('$ID_P','$titulo','$descrip','$imagen','$cantidad','$fecha')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo 'Error no se publico';
}
else{
    header('location: ../index.php');   
}

}else{
    echo "<script>alert('*** El archivo no es una imagen Ó supera el tamaño mínimo (100kB). ***');
    window.location='../publicacion.php';
    </script>";
}
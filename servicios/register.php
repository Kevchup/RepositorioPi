<?php

include('_conexion.php');
$ID_P = $_POST["ID_P"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$tipo = $_POST["tipo"];

$sql="INSERT INTO productor(ID_P,nombre,apellido,telefono,email,contraseña) VALUES ('$ID_P','$nombre','$apellido','$telefono','$email','$contraseña')";
$result=mysqli_query($con,$sql);
if($result == 1){
    $sql = "INSERT INTO tipou(ID_P,tipo) VALUES ('$ID_P','$tipo')";
    $result2=mysqli_query($con,$sql);
    header('location: ../login.php');
    echo "Si se registro";
}else{
    echo "No se registró";
}
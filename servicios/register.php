<?php

include('_conexion.php');

$ID_P = $_POST["ID_P"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];

$sql="INSERT INTO productor(ID_P,nombre,apellido,telefono,email,contraseña) VALUES ('$ID_P','$nombre','$apellido','$telefono','$email','$contraseña')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo 'Error al registrarse';
}
else{
    header('location: ../login.php');   
}
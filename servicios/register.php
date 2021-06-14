<?php

include('_conexion.php');
$ID = $_POST["ID"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$tipo = $_POST["tipo"];

$sql="INSERT INTO usuario(ID,nombre,apellido,telefono,email,contraseña) VALUES ('$ID','$nombre','$apellido','$telefono','$email','$contraseña')";
$result=mysqli_query($con,$sql);
if($result == 1){
    $sql = "INSERT INTO tipou(ID,tipo) VALUES ('$ID','$tipo')";
    $result2=mysqli_query($con,$sql);
    header('location: ../login.php');
    echo "Si se registro";
}else{
    echo "<script>alert('*** La cedula ya se encuentra registrada ***');
    window.location='../register.php';
    </script>";
}
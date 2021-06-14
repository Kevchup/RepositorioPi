<?php
//1. Error de conexion
//2. Email invalido
//3. contraseña incorrecta
include('_conexion.php');
$email=$_POST['email'];
$sql="SELECT * FROM usuario WHERE email='$email'";
$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if($count!=0){  
        $contraseña=$_POST['contraseña'];
        if($row['contraseña']!=$contraseña){
            header('location: ../login.php?e=3');            
        }else{
            session_start();
            $_SESSION['ID']=$row['ID'];
            $_SESSION['email']=$row['email'];
            $_SESSION['nombre']=$row['nombre'];
            $_SESSION['telefono']=$row['telefono'];
            header('location: ../');
        }
    }else{
        header('location: ../login.php?e=2');        
    }
}else{
    header('location: ../login.php?e=1');    
} 
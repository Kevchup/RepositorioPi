<?php 
session_start();
include('_conexion.php');
$response=new stdClass();

$datos=[];
$i=0;
$ced = $_GET['ced'];

$sql="select * from productor where ID_P = '$ced'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    $obj=new stdClass();
    $obj->nombre=$row['nombre'];
    $obj->apellido=$row['apellido'];
    $obj->telefono=$row['telefono'];
    $obj->email=$row['email'];
    $datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;


mysqli_close($con);
header('Content-Type: aplication/json');
echo json_encode($response);
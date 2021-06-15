<?php 

include('_conexion.php');
$response=new stdClass();
 $_SESSION['ID']='';
$dato=[];
$i=0;
$tipo = $_GET['tipo'];

$sql="select * from tipou where tipo = '$tipo'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
     session_start();
    $obj=new stdClass();
    $_SESSION['ID']=$row['ID'];
    $obj->ID=$row['ID'];
    $dato[$i]=$obj;
    $i++;
}
$response->dato=$dato;


mysqli_close($con);
header('Content-Type: aplication/json');
echo json_encode($response);
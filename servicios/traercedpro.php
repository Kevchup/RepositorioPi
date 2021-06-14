<?php 

include('_conexion.php');
$response=new stdClass();
 $_SESSION['ID']='';
$datos=[];
$i=0;
$codigo = $_GET['codigo'];

$sql="select * from producto where codigo = '$codigo'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
     session_start();
    $obj=new stdClass();
    $_SESSION['ID']=$row['ID'];
    $obj->ID=$row['ID'];
    $datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;


mysqli_close($con);
header('Content-Type: aplication/json');
echo json_encode($response);
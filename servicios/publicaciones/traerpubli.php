<?php  
include('../_conexion.php');
$response=new stdClass();

$datos=[];
$i=0;

$sql="select * from producto";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    $obj=new stdClass();
    $obj->codigo=$row['codigo'];
    $obj->titulo=$row['titulo'];
    $obj->descrip=$row['descrip'];
    $obj->imagen=$row['imagen'];
    $obj->cantidad=$row['cantidad'];
    $obj->fecha=$row['fecha'];
    $datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: aplication/json');
echo json_encode($response);
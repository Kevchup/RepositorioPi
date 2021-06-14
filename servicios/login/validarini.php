<?php
session_start();
$response=new stdClass();
if(!isset($_SESSION['ID'])){
    $response->state=false;
    $response->detail="No esta logeado";
    $response->open_log=true;
}
else{
    $response->state=true;
    $response->detail="Esta logeado";
}

//mysqli_close($con);
header('Content-Type: aplication/json');
echo json_encode($response);
<?php
include("db_connection.php");
$response = array();
if(isset($_POST['btnregistro'])):
    require "../ajax/conexion.php";
    $user= new ApptivaDB();
    $nombre = $_POST['txtnombre'];
    $email = $_POST['txtemail'];
    $password = md5($_POST['txtpassword']);


    $data     =  "'".$nombre."','".$email."','".$password."',1";
    $u=$user->insertar("login",$data);
    if($u):
        
            $response['nombre']=$nombre;
            $response['success']=true;
        
    else:
            $response['success']=false;
    endif;
endif;
die(json_encode($response));
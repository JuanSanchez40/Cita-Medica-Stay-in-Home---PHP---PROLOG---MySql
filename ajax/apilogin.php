<?php
$response = array();
if(isset($_POST['btnlogin'])):
    require "../ajax/conexion.php";
    $user= new ApptivaDB();
    $email = $_POST['txtemail'];
    $password = md5($_POST['txtpassword']);
    $data     = "email='".$email."' AND password='".$password."' AND nivel=1";
    $u=$user->buscar("login",$data);
    if($u):
        foreach($u as $data):
            $response['nombre']=$data['nombre'];
            $response['success']=true;
        endforeach;
    else:
            $response['success']=false;
    endif;
endif;
die(json_encode($response));
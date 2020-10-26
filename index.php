<?php
session_start();
include "config.php";
require "class/conexion.php";
$user= new ApptivaDB();
include "inc/header.php";
if(isset($_SESSION['administrador']))
    $pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : "index";
else
    $pagina="login";    
include "paginas/".$pagina.".php";
$user=null;
include "inc/footer.php";
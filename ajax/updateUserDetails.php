<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
	$idpensionado=$_POST['idpensionado'];
	$codpensionado=$_POST['codpensionado'];
   
   
    $obs = strtoupper($_POST['obs']);


    // Updaste User details
    $query = "UPDATE pensionados SET idpensionado='$idpensionado', codpensionado='$codpensionado', obs = '$obs' WHERE idobs = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
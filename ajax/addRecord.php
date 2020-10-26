<?php
	if(isset($_POST['idpensionado']) && isset($_POST['codpensionado']) && isset($_POST['obs']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$idpensionado = $_POST['idpensionado'];
		$codpensionado = $_POST['codpensionado'];
		$codmatri = $_POST['codmatri'];
		$altura = $_POST['altura'];
		$ancho = $_POST['ancho'];
		$volumen = $_POST['volumen'];
		$tipaq = $_POST['tipaq'];
		$concepto = $_POST['concepto'];
		$obs = strtoupper($_POST['obs']);


		
		$query = "INSERT INTO pensionados(idpensionado, codpensionado, codmatri, altura, ancho, volumen, tipaq, concepto, obs, fecha) VALUES( '$idpensionado','$codpensionado','$codmatri', '$altura', '$ancho','$volumen',
		'$tipaq', '$concepto', '$obs', now())";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>
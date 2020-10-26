<!DOCTYPE html>
<html lang="en">
	
<head >
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dr. SimiBot Online</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
</head>
<body>

<?php if(isset($_SESSION['administrador'])): ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">


  
  

<div class="container">

  <a class="navbar-brand" href="#">
<a class="navbar-brand" href="#"><img src="img\similogo2.png" width="100" height="80" alt=""></a>
</a>

  <a class="navbar-brand" href="<?php echo urlsite ?>">Dr. SimiBot</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">  	
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="?pagina=index">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="?pagina=registrocliente">Citas Registradas</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="?pagina=promociones">Promociones</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo urlsite ?>procesos/logout.php">Cerrar Sesion</a>
	      </li>
	    </ul>
	</div>
</div>
</nav>
<?php endif;?>
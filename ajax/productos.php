<div class="container">
	<?php include("db_connection.php"); require "conexion.php";
	/* listado; insertar; editar; eliminar */
	$accion="listado";
	if(isset($_REQUEST['accion']))
		$accion=$_REQUEST['accion'];
	switch($accion):
		case "listado";
			?>
			<h1 class="m-2 p-2">PRODUCTOS</h1>
			<a href="?pagina=productos&accion=insertar" class="btn btn-danger">CREAR</a>
			<table class="table">
			<thead><th>ID</th><th>NOMBRE</th><th>QR</th><th>ACCIONES</th></thead>
			<tbody>
      <?php 
      $u=$user->buscar("productos","1");
			foreach($u as $r):
				?>
				<tr>
					<td><?php echo $r['id'];?></td>
					<td><?php echo $r['nombre'];?></td>
					<td><img src="img/qr/<?php echo $r['qr'];?>"></td>
					<td>
						<a href="?pagina=productos&accion=editar" class="btn btn-danger">EDITAR</a>
						<a href="?pagina=productos&accion=eliminar" class="btn btn-danger">ELIMINAR</a>
					</td>
				</tr>				
				<?php
			endforeach;
			 ?>	
			</tbody>
			
			</table>
			<?php
		break;
		case "insertar";
			echo "insertar";
		break;
		case "editar";
			echo "editar";
		break;
		case "eliminar";
			echo "eliminar";
		break;
	endswitch;

	?>
</div>
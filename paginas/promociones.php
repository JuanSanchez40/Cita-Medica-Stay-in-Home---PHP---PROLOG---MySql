<div class="container bg-light shadow">
	<?php
	/* listado; insertar; editar; eliminar */
	$accion="listado";
	if(isset($_REQUEST['accion']))
		$accion=$_REQUEST['accion'];
	switch($accion):
		case "listado";
			?>
			<h1 class="m-2 p-2">PROMOCIONES</h1>
			<a href="?pagina=promociones&accion=insertar" class="btn btn-danger">CREAR</a>
			<table class="table">
			<thead><th>ID</th><th>NOMBRE</th><th>ACCIONES</th></thead>
			<tbody>
			<?php 
			$u=$user->buscar("promociones","1");
			foreach($u as $r):
				?>
				<tr>
					<td><?php echo $r['id'];?></td>
					<td><?php echo $r['nombre'];?></td>
					<td>
						<a href="?pagina=promociones&accion=editar&id=<?php echo $r['id'] ?>" class="btn btn-danger">EDITAR</a>
						<a href="?pagina=promociones&accion=eliminar&id=<?php echo $r['id'] ?>" onclick="return confirm('¿Estas Segro de Eliminar este Registro?')" class="btn btn-danger">ELIMINAR</a>
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
            if(isset($_POST['btn'])):
               $nombre       =  $_POST['nombre'];
               $descripcion  =  $_POST['descripcion'];
               $productos_id =  $_POST['productos_id'];
              
               $data        = "'".$nombre."','".$descripcion."',".$productos_id."";
               $u  =     $user->insertar("promociones",$data);
               if($u):
                
                  echo " Insercion Ok";
               else:
                  echo " Error Insercion";
               endif;
            else:
                ?>
                <div class="col-sm-8">
                 <form action="" method="post">
                 <div class="form-group">
                     <label for="nombre">NOMBRE:</label>
                     <input type="text" class="form-control" require name="nombre">
                 </div>
                 <div class="form-group">
                     <label for="descripcion">DESCRIPCION</label>
                     <textarea type="text" class="form-control" require name="descripcion"></textarea>
                 </div>
                 <div class="form-group">
                     <label for="productos_id">PRODUCTO:</label>
                     <?php $p=$user->buscar("productos","1");?>
                     <select name="productos_id">
                     <?php foreach($p as $pr): ?>
                     <option value="<?php echo $pr['id']?>"><?php echo $pr['nombre']?></option>
                     <?php endforeach; ?>
                     </select>
                 </div>
                 
                 <input type="submit" name="btn" value="ENVIAR">
                 </form>
                 </div>
                 <?php
            endif;
		break;
        case "editar";
        if(isset($_POST['btn'])):
            $nombre       =  $_POST['nombre'];
            $descripcion  =  $_POST['descripcion'];
            $productos_id =  $_POST['productos_id'];   
            
                          
            $data        = "nombre='".$nombre."',descripcion='".$descripcion."',productos_id=".$productos_id."";
            $u  =     $user->actualizar("promociones",$data,"id=".$_REQUEST['id']);
            if($u):
                
               echo " Edicion Ok";
            else:
               echo " Error Edicion";
            endif;
            else:
            $u=$user->buscar("promociones","id=".$_REQUEST['id']);
            foreach($u as $r):
             ?>
             <div class="col-sm-8">
              <form action="" enctype="multipart/form-data" method="post">
              <div class="form-group">
                  <label for="nombre">NOMBRE:</label>
                  <input type="text" class="form-control" require name="nombre" value="<?php echo $r['nombre']?>">
              </div>
              <div class="form-group">
                  <label for="descripcion">DESCRIPCION</label>
                  <textarea class="form-control" require name="descripcion"> <?php echo $r['descripcion'] ?> </textarea>
              </div>
              <div class="form-group">
                     <label for="productos_id">PRODUCTO:</label>
                     <?php $p=$user->buscar("productos","1");?>
                     <select name="productos_id">
                     <option value="<?php echo $r['productos_id']?>"><?php echo $r['productos_id']?></option>
                     <?php foreach($p as $pr): ?>
                     <option value="<?php echo $pr['id']?>"><?php echo $pr['nombre']?></option>
                     <?php endforeach; ?>
                     </select>
                 </div>
              <input type="submit" name="btn" value="ACTUALIZAR">
              <input type="hidden" name="id" value="<?php echo $_REQUEST['id']?>">
              </form>
              </div>
              <?php
              endforeach;
            endif;
		break;
		case "eliminar";
            if(isset($_REQUEST['id'])):
                 $u = $user->borrar("promociones","id=".$_REQUEST['id']);
                 if($u):
                    echo " Registro Eliminado ok";
            else:
                    echo "Registro no Eliminado";
                  endif;
            endif;
		break;
	endswitch;

	?>
</div>

<div class="container bg-light shadow">
    <?php     
    function costoconsulta($X){
        $command= `swipl -s C:/xampp/htdocs/Proyecto-IA/CostoConsulta.pl -g "total_consulta_paciente($X,Y). -t 'halt'"`;
        exec($command);
        return $command;
    }
    function costomedicina($M){
        $command= `swipl -s C:/xampp/htdocs/Proyecto-IA/CostoConsulta.pl -g "total_costo_medicina($M,Y). -t 'halt'"`;
        exec($command);
        return $command;
    }
    $Z=0.0;
    function sumatotal($X,$M){
        $command= `swipl -s C:/xampp/htdocs/Proyecto-IA/CostoConsulta.pl -g "sumatotal($X,S,$M,Y,Z). -t 'halt'"`;
        exec($command,$command2);
        return $command;
    }
    /* listado; insertar; editar; eliminar */
	$accion="listado";
	if(isset($_REQUEST['accion']))
        $accion=$_REQUEST['accion'];
    switch($accion):
		case "listado";
			?>
			<h1 class="m-2 p-2">CONSULTAS</h1>
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
						<a href="?pagina=registrocliente&accion=editar&id=<?php echo $r['id'] ?>" class="btn btn-danger">EDITAR</a>
						<a href="?pagina=registrocliente&accion=eliminar&id=<?php echo $r['id'] ?>&foto=<?php echo $r['foto'] ?>" onclick="return confirm('¿Estas Segro de Eliminar este Registro?')" class="btn btn-danger">ELIMINAR</a>
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
               $nombre      = $_POST['nombre'];
               $descripcion = $_POST['descripcion'];
               $precio      = $_POST['precio'];
               $stock       = $_POST['stock'];
               $totalconsulta=0.0;
               $totalmedicina=0.0;
               $total=0.0;
               $estado      = 1;
               $var=($_GET['var']);      

//INSERTAR EL COSTO DE LA CONSULTA EN BASE A LA EDAD
if($precio != 0){
    $totalconsulta=0.0;
    $totalmedicina=0.0;
    $total=0.0;
                if($precio <= 12 ){
                  $X='niños';
                  $totalconsulta=costoconsulta($X);

                }
                elseif($precio >= 13 && $precio <= 17){
                $X='adolecentes';
                $totalconsulta=costoconsulta($X);
                 
                }
                elseif($precio >= 18 && $precio <= 59){
                $X='adultos';
                $totalconsulta=costoconsulta($X);
                 
                }
                elseif($precio >= 60 && $precio <= 100){
                $X='adultosmayores';
                $totalconsulta=costoconsulta($X);
                
                }
//INSERTAR EL COSTO DE LA MEDICINA
                if($var=="gripe"){
                $M="oseltamivir";
                $totalmedicina=costomedicina($M);
                
                }
                elseif($var=="gastritis"){
                $M="ranitidina";
                $totalmedicina=costomedicina($M);
                
                }
                elseif($var=="colera"){
                $M="doxiciclina";
                $totalmedicina=costomedicina($M);
                
                }
                elseif($var=="coronavirus"){
                $M="paracetamol";
                $totalmedicina=costomedicina($M);
                
                }
                $totalconsulta=(double) $totalconsulta;
                $totalmedicina=(double) $totalmedicina;     
                //echo $total=($totalconsulta+$totalmedicina);         
                echo $total=sumatotal($X,$M);       
}
 //SUBIR IMAGEN AL SERVIDOR PARA PENSIONADOS
               $foto        = $_FILES['foto']['name'];
               if(move_uploaded_file($_FILES['foto']['tmp_name'],"img/".$foto))
                  echo "Foto Cargada";   
               else
                  echo "Error Al Cargar Foto";
 //GENERAR QR
               $qr          = "foto.jpg";
               $data        = "'".$nombre."','".$descripcion."','".$foto."','".$qr."','".$precio."','".$stock."','".$totalconsulta."','".$totalmedicina."','".$total."','".$estado."'";
               $u  =     $user->insertar("productos",$data);
               if($u):
                require "class/phpqrcode/qrlib.php";
                $id = $user->lastInsertId();
                QRcode::png($id,"img/qr/qr_".$id.".png",'L',10,5);
                $user->actualizar("productos","qr='qr_".$id.".png'", "id=".$id);
                echo " Insercion Ok";
                $costo      = $_POST['precio'];
       
                else:
                  echo " Error Insercion";

               endif;
            else:
                ?><img src="img\simibot2.png" align="right"></p>
                <p> 
                <div class="col-sm-8"> 
                    <form action="" enctype="multipart/form-data" method="post">
                    <h1 class="text-center"> REGISTRA TU CONSULTA </h1>
                        <BR></BR>
                        <div class="form-group">
                             <label for="nombre">NOMBRE:</label>
                             <input placeholder="Tu nombre" type="text" class="form-control" require name="nombre">
                        </div>
                        <div class="form-group">
                             <label for="descripcion">DESCRIPCION DE ENFERMEDAD</label>
                             <textarea readonly="readonly" id="uno" type="text" class="form-control" require name="descripcion"><?php echo $_GET['vardescripcion']; ?></textarea>
                        </div>
                        <div class="form-group">
                             <label for="foto">FOTO:</label>
                             <input type="file" class="form-control" require name="foto">
                        </div>
                        <div class="form-group">
                              <label for="precio">EDAD:</label>
                              <input placeholder="Cuantos años tienes?" type="text" class="form-control" require name="precio">
                        </div>
                        <div class="form-group">
                              <label for="stock">RECETA MEDICA</label>
                              <textarea readonly="readonly" id="uno" type="text" class="form-control" require name="stock"><?php echo $_GET['rm']; ?></textarea>
                        </div>
                                    
                        <div>
                            <form action="ejemplo.php" method="get">
                            <input type="submit" name="btn" value="ENVIAR"> </div></form>
                            <BR></BR>
                            </form>
                        </div>  
                             
                    </form>
                </div>
                <?php         
            endif;
		break;
        case "editar";
        if(isset($_POST['btn'])):
            $nombre      = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio      = $_POST['precio'];
            $stock       = $_POST['stock'];
            $estado      = $_POST['estado'];
            //SUBIR IMAGEN AL SERVIDOR PARA PENSIONADOS
            $foto        = $_FILES['foto']['name'];
            if(move_uploaded_file($_FILES['foto']['tmp_name'],"img/".$foto))
               echo "Foto Cargada";
            else
               echo "Error Al Cargar Foto";
            //GENERAR QR
            $qr          = "foto.jpg";          
            $data        = "nombre='".$nombre."',descripcion='".$descripcion."',foto='".$foto."',precio=".$precio.",stock=".$stock.",estado=".$estado."";
            $u  =     $user->actualizar("productos",$data,"id=".$_REQUEST['id']);
            if($u):
                require "class/phpqrcode/qrlib.php";
                $id = $_REQUEST['id'];
                QRcode::png($id,"img/qr/qr_".$id.".png",'L',10,5);
                $user->actualizar("productos","qr='qr_".$id.".png'", "id=".$id);
               echo " Edicion Ok";
            else:
               echo " Error Edicion";
            endif;
            else:
            $u=$user->buscar("productos","id=".$_REQUEST['id']);
            foreach($u as $r):
             ?>
             <div class="col-sm-8">
              <form action="" enctype="multipart/form-data" method="post">
              <div class="form-group">
                  <label for="nombre">NOMBRE:</label>
                  <input type="text" class="form-control" require name="nombre" value="<?php echo $r['nombre']?>">
              </div>
              <div class="form-group">
                  <label for="descripcion">DESCRIPCION DE ENFERMEDAD</label>
                  <textarea readonly="readonly" class="form-control" require name="descripcion"> <?php echo $r['descripcion'] ?> </textarea>
              </div>
              <div class="form-group">
                  <label for="foto">FOTO:</label>
                  <img src="img/<?php echo $r['foto'] ?>">
                  <input type="file" class="form-control" require name="foto">
              </div>
              <div class="form-group">
                  <label for="precio">EDAD:</label>
                  <input type="text" class="form-control" require name="precio" value="<?php echo $r['precio'] ?>">
              </div>
              <div class="form-group">
                  <label for="stock">RECETA MEDICA</label>
                  <input type="text" class="form-control" require name="stock"value="<?php echo $r['stock']?>">
              </div>
              <div class="form-group">
                  <label for="estado">ESTADO</label>
                  <input type="text" class="form-control" require name="estado"value="<?php echo $r['estado']?>">
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
                 $u = $user->borrar("productos","id=".$_REQUEST['id']);
                 if($u):
                    if(unlink("img/".$_REQUEST['foto']))
                          echo "Fofo Eliminada";
                    else
                          echo "Foto No Eliminada";
                    echo " Registro Eliminado ok";
                    ?>
                    <td>
						<a href="?pagina=registrocliente" class="btn btn-danger">Regrezar a Citas Registradas</a>
					</td>
                    <?php         
            else:
                    echo "Registro no Eliminado";
                    endif;
            endif;
		break;
	endswitch;

	?>
</div>
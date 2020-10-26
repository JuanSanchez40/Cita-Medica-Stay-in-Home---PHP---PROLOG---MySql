<?php 
if(isset($_REQUEST['app'])):
    $response=array();
    $response['success'] = true;
    require "../ajax/conexion.php";
    $user= new ApptivaDB();
    // productos
    $u=$user->buscar("productos","1");    
    $response['listaproductos']= array();
    if($u):
        foreach($u as $r):
            $item = array();
            $item['id']         = $r['id'];
            $item['nombre']     = $r['nombre'];
            $item['descripcion']= $r['descripcion'];
            $item['foto']       = $r['foto'];
            $item['qr']         = $r['qr'];
            $item['precio']     = $r['precio'];
            $item['stock']     = $r['stock'];
            $item['totalconsulta']  = $r['totalconsulta'];
            $item['totalmedicina']  = $r['totalmedicina'];
            $item['total']     =  $r['total'];
            $item['estado']     = $r['estado'];
            array_push($response['listaproductos'],$item);
        endforeach;
    endif;
    // promociones
    $u=$user->buscar("promociones","1");    
    $response['listapromociones']= array();
    if($u):
        foreach($u as $r):
            $item = array();
            $item['id']         = $r['id'];
            $item['nombre']     = $r['nombre'];
            $item['descripcion']= $r['descripcion'];
            $item['foto']       = $r['foto'];
            $item['productos_id']= $r['productos_id'];
            array_push($response['listapromociones'],$item);
        endforeach;
    endif;    
else:
    $response['success'] = false;
endif;
die(json_encode($response));
?>
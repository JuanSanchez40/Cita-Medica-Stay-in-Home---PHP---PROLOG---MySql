<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Pensionados | </title>
<link rel="icon" href="img\logo.ico"/>
</head>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>

<body>
<header> 
  <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#"><img src="img\logo-imss.png"> IA Proyect UAS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">PENSIONADOS IMSS</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      
      
<!-- Content Section --> 
<!-- crud jquery-->
<div class="da">
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Pensionado</button>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div id="records_content"></div>
    </div>
  </div>
</div>
<!-- /Content Section --> 

<!-- Bootstrap Modals --> 
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
           <h5 class="modal-title">Nuevo Pensionado</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
      </div>
             <div class="form-group">
                  <label>Datos del Pensionado</label>
             </div>
      <div class="modal-body">
            <div  class="form-row">
                <div class="form-group col-md-6">
                <label for="id_Pensionado">Id Paquete</label>
                <input  type="text" id="idpensionado" value=""  class="form-control"/>
                </div>
                <div class="form-group col-md-6">
                <label for="Cod Pensionado">Cod. RQ</label>
                <input type="text" id="codpensionado" value=""   class="form-control"/>
                </div>
       
          
                  <div class="form-group col-md-6">
                   <label for="CodMatri">Peso Kgs.</label>
                   <input type="text" id="codmatri" value="" class="form-control" />
                  </div>


                  <div class="form-group col-md-6">
                  <label for="altura">Altura</label>
                  <input type="num" id="altura" value="" class="form-control" />
                  </div>

                  <div class="form-group col-md-6">
                  <label for="ancho">Ancho</label>
                  <input type="text" id="ancho" class="form-control" value=""/>
                  </div>
              
                  <div class="form-group col-md-6">
                  <label for="volumen">Volumen</label>
                  <input type="text" id="volumen" class="form-control" value=""/>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="tipaq">Tipo de Paquete</label>
                  <select name="tipaq" id="tipaq" value="" class="form-control" >
                    <option value="Fragil">Fragil</option>
                    <option value="Rigido">Rigido</option>
                  </select>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="concepto">Concepto</label>
                  <select name="concepto" id="concepto" value="" class="form-control">
                    <option value="mensajeria">Mensajeria</option>
                    <option value="paqueteria">Paqueteria</option>
                    <option value="Msj y Paq">Msj y Paq</option>
                  </select>
                  </div>
               
                      <div class="form-group">
                           <label for="Observacion">Observacion</label>
                           <textarea style="text-transform:uppercase" id="obs" class="form-control"></textarea>
                           <!--<input type="text" id="obs" class="form-control"/>--> 
                      </div>
            </div>
                      <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                           <button type="button" class="btn btn-primary" onclick="addRecord()">Agregar</button>
                      </div>
        </div>
  </div>
  </div>
</div>
<!-- // Modal --> 

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      
      
      <div class="modal-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="idpensionado">Id. Pensionado</label>
          <input type="text" id="update_idpensionado" value="" class="form-control"/>
        </div>
        
        <div class="form-group col-md-6">
          <label for="codpensionado">Cod. RQ</label>
          <input type="text" id="update_codpensionado" placeholder="Last Name" class="form-control"/>
        </div>
        <div class="form-group col-md-6">
          <label for="obs">Observaciones</label>
          <textarea style="text-transform:uppercase" id="update_obs" class="form-control"></textarea>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Guardar Cambios</button>
        <input type="hidden" id="hidden_user_id">
      </div>
    </div>
  </div>
</div>
<!-- // Modal --> 
<!-- Jquery JS file --> 
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS file --> 
<!-- Custom JS file --> 
<script type="text/javascript" src="js/script.js"></script> 
<!-- Fin crud jquery-->



      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="http://fim.uas.edu.mx" target="_blank">Ing. Software</a></p>
    </span> </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 

<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
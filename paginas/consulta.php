<?php
global $GLOBALS;
$var_1 = "";
$vardescripcion="";
$rm="";
$var="";
if(isset($_POST['submit'])){
$pr1 = $_POST['p1'];$pr2 = $_POST['p2'];$pr3 = $_POST['p3'];$pr4 = $_POST['p4'];$pr5 = $_POST['p5'];
$pr6 = $_POST['p6'];$pr7 = $_POST['p7'];$pr8 = $_POST['p8'];$pr9 = $_POST['p9'];$pr10 = $_POST['p10'];
$pr11 = $_POST['p11'];$pr12 = $_POST['p12'];$pr13 = $_POST['p13'];$pr14 = $_POST['p14'];$pr15 = $_POST['p15'];
$pr16 = $_POST['p16'];$pr17 = $_POST['p17'];$pr18 = $_POST['p18'];$pr19 = $_POST['p19'];$pr20 = $_POST['p20'];
$pr21 = $_POST['p21'];$pr22 = $_POST['p22'];
      if($pr1 =="si" && $pr2 =="si" && $pr3 =="si" && $pr4 =="si" && $pr5 == "si"){
               $var_1="Usted Tiene: ";
               $nombreEnfermedad="gripe";
               $var=$nombreEnfermedad;               
               $vardescripcion=descripcion($nombreEnfermedad);
               $rm=receta($nombreEnfermedad);
               }
               elseif($pr6 =="si" && $pr7 =="si" && $pr8 =="si" && $pr9 =="si" && $pr10 == "si")
               {
                    $var_1="Usted Tiene: ";
                    // echo $var="Usted Tiene alergia.";
                    $nombreEnfermedad="gastritis";
                    $var=$nombreEnfermedad;
                    $vardescripcion=descripcion($nombreEnfermedad);
                    $rm=receta($nombreEnfermedad);
               }
               elseif($pr11 =="si" && $pr12 =="si" && $pr13 =="si" && $pr14 =="si" && $pr15 == "si" && $pr16 == "si")
               {
                    $var_1="Usted Tiene: ";
                    $nombreEnfermedad="colera";
                    $var=$nombreEnfermedad;                    
                    $vardescripcion=descripcion($nombreEnfermedad);
                    $rm=receta($nombreEnfermedad);
               }
               elseif($pr17 == "si" && $pr18 =="si" && $pr19 =="si" && $pr20 =="si" && $pr21 =="si" && $pr22 =="si")
               {
                    $var_1="Usted Tiene: ";
                    $nombreEnfermedad="coronavirus";
                    $var=$nombreEnfermedad;                    
                    $vardescripcion=descripcion($nombreEnfermedad);
                    $rm=receta($nombreEnfermedad);
               }
               else{
                    $vardescripcion="Usted tiene otra cosa.";
               }
}else
{
}
function descripcion($nombreEnfermedad){
     //echo $nombreEnfermedad;
     $preguntas = 'C:\Program Files\swipl\bin\swipl-win.exe -s C:\SimiConsult.pl -g teat,halt';
     $command= `swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "descripcion_enfermedad($nombreEnfermedad). -t 'halt'"`;
     exec($command, $descripcion);
     return $command;
}
function receta($nombreEnfermedad){
     //echo $nombreEnfermedad;
     $preguntas = 'C:\Program Files\swipl\bin\swipl-win.exe -s C:\SimiConsult.pl -g teat,halt';
     $command= `swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "receta_medica($nombreEnfermedad). -t 'halt'"`;
     exec($command, $descripcion);
     return $command;
}
function insertarEnfermedad($nombreEnfermedad){
  $command= `swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "insertarEnfermedad($nombreEnfermedad)). -t 'halt'"`;
  exec($command, $enfermedad);
  echo "INSERTADO";
}

function pregunta1($nombreEnfermedad){
     $nombreEnfermedad="gripe";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p1, $p2, $p3, $p4, $p5) = explode(",",$data);
     //var_dump($output);
     echo $p1;
}
function pregunta2($nombreEnfermedad){
     $nombreEnfermedad="gripe";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p1, $p2, $p3, $p4, $p5) = explode(",",$data);
     //var_dump($output);
     echo $p2;
}
function pregunta3($nombreEnfermedad){
     $nombreEnfermedad="gripe";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p1, $p2, $p3, $p4, $p5) = explode(",",$data);
     //var_dump($output);
     echo $p3;
}
function pregunta4($nombreEnfermedad){
     $nombreEnfermedad="gripe";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p1, $p2, $p3, $p4, $p5) = explode(",",$data);
     //var_dump($output);
     echo $p4;
}
function pregunta5($nombreEnfermedad){
     $nombreEnfermedad="gripe";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p1, $p2, $p3, $p4, $p5) = explode(",",$data);
     //var_dump($output);
     echo $p5;
}

function pregunta6($nombreEnfermedad){
     $nombreEnfermedad="gastritis";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p6, $p7, $p8, $p9, $p10) = explode(",",$data);
     //var_dump($output);
     echo $p6;
}
function pregunta7($nombreEnfermedad){
     $nombreEnfermedad="gastritis";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p6, $p7, $p8, $p9, $p10) = explode(",",$data);
     //var_dump($output);
     echo $p7;
}
function pregunta8($nombreEnfermedad){
     $nombreEnfermedad="gastritis";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p6, $p7, $p8, $p9, $p10) = explode(",",$data);
     //var_dump($output);
     echo $p8;
}
function pregunta9($nombreEnfermedad){
     $nombreEnfermedad="gastritis";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p6, $p7, $p8, $p9, $p10) = explode(",",$data);
     //var_dump($output);
     echo $p9;
}
function pregunta10($nombreEnfermedad){
     $nombreEnfermedad="gastritis";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p6, $p7, $p8, $p9, $p10) = explode(",",$data);
     //var_dump($output);
     echo $p10;
}
function pregunta11($nombreEnfermedad){
     $nombreEnfermedad="colera";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p11, $p12, $p13, $p14, $p15, $p16) = explode(",",$data);
     //var_dump($output);
     echo $p11;
}
function pregunta12($nombreEnfermedad){
     $nombreEnfermedad="colera";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p11, $p12, $p13, $p14, $p15, $p16) = explode(",",$data);
     //var_dump($output);
     echo $p12;
}
function pregunta13($nombreEnfermedad){
     $nombreEnfermedad="colera";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p11, $p12, $p13, $p14, $p15, $p16) = explode(",",$data);
     //var_dump($output);
     echo $p13;
}
function pregunta14($nombreEnfermedad){
     $nombreEnfermedad="colera";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p11, $p12, $p13, $p14, $p15, $p16) = explode(",",$data);
     //var_dump($output);
     echo $p14;
}
function pregunta15($nombreEnfermedad){
     $nombreEnfermedad="colera";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p11, $p12, $p13, $p14, $p15, $p16) = explode(",",$data);
     //var_dump($output);
     echo $p15;
}
function pregunta16($nombreEnfermedad){
     $nombreEnfermedad="colera";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p11, $p12, $p13, $p14, $p15, $p16) = explode(",",$data);
     //var_dump($output);
     echo $p16;
}
function pregunta17($nombreEnfermedad){
     $nombreEnfermedad="coronavirus";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p17, $p18, $p19, $p20, $p21, $p22) = explode(",",$data);
     //var_dump($output);
     echo $p17;
}
function pregunta18($nombreEnfermedad){
     $nombreEnfermedad="coronavirus";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p17, $p18, $p19, $p20, $p21, $p22) = explode(",",$data);
     //var_dump($output);
     echo $p18;
}
function pregunta19($nombreEnfermedad){
     $nombreEnfermedad="coronavirus";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p17, $p18, $p19, $p20, $p21, $p22) = explode(",",$data);
     //var_dump($output);
     echo $p19;
}
function pregunta20($nombreEnfermedad){
     $nombreEnfermedad="coronavirus";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p17, $p18, $p19, $p20, $p21, $p22) = explode(",",$data);
     //var_dump($output);
     echo $p20;
}
function pregunta21($nombreEnfermedad){
     $nombreEnfermedad="coronavirus";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p17, $p18, $p19, $p20, $p21, $p22) = explode(",",$data);
     //var_dump($output);
     echo $p21;
}
function pregunta22($nombreEnfermedad){
     $nombreEnfermedad="coronavirus";
     $command=`swipl -s C:/xampp/htdocs/Proyecto-IA/SimiConsult.pl -g "enfermedad_sintoma($nombreEnfermedad). -t 'halt'"`;
     exec($command, $preguntas);
     //echo $command;
     $data =$command;
     list($p17, $p18, $p19, $p20, $p21, $p22) = explode(",",$data);
     //var_dump($output);
     echo $p22;
}
?>
<form name="prs" method="post" action="#" id="consulta"><div class="container bg-light shadow">

    <label>Responda el Test para Diagnostico para  Gripe, Gastritis, Colera, Covid-19:</label>
    <p><STRONG><?php pregunta1('$nombreEnfermedad');?></STRONG></p>
    <select id="p1" name="p1"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta2('$nombreEnfermedad');?></STRONG></p>
    <select name="p2"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta3('$nombreEnfermedad');?></STRONG></p>
    <select name="p3"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta4('$nombreEnfermedad');?></STRONG></p>
    <select name="p4"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta5('$nombreEnfermedad');?></STRONG></p>
    <select name="p5"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta6('$nombreEnfermedad');?></STRONG></p>
    <select name="p6"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta7('$nombreEnfermedad');?></STRONG></p>
    <select name="p7"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta8('$nombreEnfermedad');?></STRONG></p>
    <select name="p8"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta9('$nombreEnfermedad');?></STRONG></p>
    <select name="p9"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta10('$nombreEnfermedad');?></STRONG></p>
    <select name="p10"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta11('$nombreEnfermedad');?></STRONG></p>
    <select name="p11"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta12('$nombreEnfermedad');?></STRONG></p>
    <select name="p12"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta13('$nombreEnfermedad');?></STRONG></p>
    <select name="p13"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta14('$nombreEnfermedad');?></STRONG></p>
    <select name="p14"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta15('$nombreEnfermedad');?></STRONG></p>
    <select name="p15"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta16('$nombreEnfermedad');?></STRONG></p>
    <select name="p16"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta17('$nombreEnfermedad');?></STRONG></p>
    <select name="p17"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta18('$nombreEnfermedad');?></STRONG></p>
    <select name="p18"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta19('$nombreEnfermedad');?></STRONG></p>
    <select name="p19"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta20('$nombreEnfermedad');?></STRONG></p>
    <select name="p20"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta21('$nombreEnfermedad');?></STRONG></p>
    <select name="p21"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <p><STRONG><?php pregunta22('$nombreEnfermedad');?></STRONG></p>
    <select name="p22"><option value="si">Si</option><option value="no">No</option></select>
    <br><br>
    <input type="submit" name="submit" value="Enviar Consulta"  onclick="location.href='?pagina=consulta#'" >
    <br><br>
    <textarea readonly="readonly" name="feedback" rows="5" cols="50" id="consulta" value="?pagina=consulta#"><?php echo "".$var_1." ".$var.".- ".$vardescripcion ?></textarea>
    <br><br>
    <a href="?pagina=registrocliente&accion=insertar&rm=<?php echo $rm ?>&var=<?php echo $var ?>&vardescripcion=<?php echo" ".$var_1." ".$var.".- ".$vardescripcion?>" class="btn btn-danger">Registrar Consulta</a>
  </form>
  

</div>

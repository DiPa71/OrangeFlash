<?php 
session_start();
if(isset($_SESSION['usuario'])){
include_once 'recursos/header.php';?>
<br><br>
<?php
$pq = $_POST['paquete'];
if(isset($_POST['submit'])){
if(empty($pq)){
    header("Location: index.php?error=Campos_vacios");
    exit();
}else{
require_once('recursos/db/db.php');
$sql="SELECT * FROM paquetes WHERE codigop='$pq'";
$results = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($results);
if ($rows === 0) {
    header("Location: index.php?error=pq_no");
    exit();
}else{

    //ordenando Los valores de la tabla
$fpaquetes = array();
while($paquetes = $results->fetch_assoc()){
    $paquete = array(
        'codigo' => $paquetes['codigop'],
        'nc' => $paquetes['nclie'],
        'stat' => $paquetes['status_p'],
        'fstat' => $paquetes['fecha_est']
    );
    $fpaquetes[]=$paquete;
}//fin while
//imprimir resultados?>
<p>Codigo del Paquete: <?php echo $paquete['codigo']?></p><br>
<p>Nombre del Cliente: <?php echo $paquete['nc']?></p><br>
<p>Estatus de su Paquete: <?php echo $paquete['stat']?></p><br>
<p>Fecha Estimada de Entrega: <?php echo $paquete['fstat']?></p><br>
<?php
}
}
 }else{
    header("Location: index.php?error=pq_no");
    exit();
}
}else{ 
    include_once 'recursos/headern.php';
    $pq = $_POST['paquete'];
if(isset($_POST['submit'])){
if(empty($pq)){
    header("Location: index.php?error=Campos_vacios");
    exit();
}else{
require_once('recursos/db/db.php');
$sql="SELECT * FROM paquetes WHERE codigop='$pq'";
$results = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($results);
if ($rows === 0) {
    header("Location: index.php?error=pq_no");
    exit();
}else{

    //ordenando Los valores de la tabla
$fpaquetes = array();
while($paquetes = $results->fetch_assoc()){
    $paquete = array(
        'codigo' => $paquetes['codigop'],
        'nc' => $paquetes['nclie'],
        'stat' => $paquetes['status_p'],
        'fstat' => $paquetes['fecha_est']
    );
    $fpaquetes[]=$paquete;
}//fin while
//imprimir resultados?>
<p>Codigo del Paquete: <?php echo $paquete['codigo']?></p><br>
<p>Nombre del Cliente: <?php echo $paquete['nc']?></p><br>
<p>Estatus de su Paquete: <?php echo $paquete['stat']?></p><br>
<p>Fecha Estimada de Entrega: <?php echo $paquete['fstat']?></p><br>
<?php
}
}
}
}
include_once 'recursos/footer.php'?>
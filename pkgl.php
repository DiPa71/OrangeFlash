<?php session_start();
$t = $_SESSION['estatus'];
if(isset($_SESSION['usuario'])){

include_once 'recursos/headerm.php';
switch($t){
    case 'c':?>
<table class="table">
    <thead class="thead-dark">
    <?php try{
            require_once('recursos/db/db.php');
            $sql = " SELECT * FROM paquetes";
            $resultado = $conn->query($sql);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        //ordenando Los valores de la tabla
        $fpaquetes= array();
        while($paquetes = $resultado->fetch_assoc()){
            $paquete = array(
                'paquete' => $paquetes['codigop'],
                'nombrec' => $paquetes['nclie'],
                'idr' => $paquetes['clvr'],
                'est' => $paquetes['status_p'],
                'pais' => $paquetes['pais'],
                'calle' => $paquetes['calle'],
                'col' => $paquetes['colonia'],
                'nc' => $paquetes['numc'],
                'fecha' => $paquetes['fecha_est']
                );
            $fpaquetes[] = $paquete;?>
            
                    <?php }//fin while?>
    
        <tr>
            <th scope="col" width="15%" class="fondogriss">ID Paquete</th>
            <th scope="col" width="10%" class="fondogriss">ID Repartidor</th>
            <th scope="col" width="20%" class="fondogriss">Nombre cliente</th>
            <th scope="col" width="10%" class="fondogriss">Estatus</th>
            <th scope="col" width="25%" class="fondogriss">Direccion</th>
            <th scope="col" width="15%" class="fondogriss">Fecha Entrega</th>
            <th scope="col" width="5%" class="fondogriss">Editar</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($fpaquetes as $paquete){?>
        <tr>
      <td scope="row"><?php echo $paquete['paquete']; ?></td>
      <td scope="row"><?php echo $paquete['idr']; ?></td>
      <td scope="row"><?php echo $paquete['nombrec']; ?></td>
      <td scope="row"><?php echo $paquete['est']; ?></td>
      <td scope="row"><?php echo $paquete['pais'] . ' '  . $paquete['col'] . ' ' . $paquete['calle'] . ' N°: ' . $paquete['nc'] ;?></td>
      <td scope="row"><?php echo $paquete['fecha']; ?> </td>
      <td scope="row"> <form class="form" action="pkge.php" method="POST">
          <input type="hidden" value="<?php echo $paquete['paquete']; ?>" name="idp">
          <input type="hidden" value="<?php echo $paquete['est']; ?>" name="estatus">
          <input type="hidden" value="<?php echo $paquete['fecha']; ?>" name="fecha">
          <button type="submit" name="submit" value="submit" class="btn-edit"><i class="fa fa-edit"></i></button>
    </form>
</td>
    </tr>
      <?php }?>
    
    </tbody>
</table>
    <?php break;
        case 'u':?>
            <div class="alert alert-warning" role="alert">
            No tiene acceso a estas caracteristicas
        </div>
        <?php break;
    case 'r':?>
    <div class="alert alert-warning" role="alert">
        Porfavor utilizar la aplicacion movil
    </div>
    <?php break;
    case 'a':?>  
    <table class="table">
    <thead class="thead-dark">
    <?php try{
            require_once('recursos/db/db.php');
            $sql = " SELECT * FROM paquetes";
            $resultado = $conn->query($sql);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        //ordenando Los valores de la tabla
        $fpaquetes= array();
        while($paquetes = $resultado->fetch_assoc()){
            $paquete = array(
                'paquete' => $paquetes['codigop'],
                'nombrec' => $paquetes['nclie'],
                'idr' => $paquetes['clvr'],
                'est' => $paquetes['status_p'],
                'pais' => $paquetes['pais'],
                'calle' => $paquetes['calle'],
                'col' => $paquetes['colonia'],
                'nc' => $paquetes['numc'],
                'fecha' => $paquetes['fecha_est']
                );
            $fpaquetes[] = $paquete;?>
            
                    <?php }//fin while?>
    
        <tr>
            <th scope="col" width="15%" class="fondogriss">ID Paquete</th>
            <th scope="col" width="10%" class="fondogriss">ID Repartidor</th>
            <th scope="col" width="20%" class="fondogriss">Nombre cliente</th>
            <th scope="col" width="10%" class="fondogriss">Estatus</th>
            <th scope="col" width="25%" class="fondogriss">Direccion</th>
            <th scope="col" width="15%" class="fondogriss">Fecha Entrega</th>
            <th scope="col" width="5%" class="fondogriss">Editar</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($fpaquetes as $paquete){?>
        <tr>
      <td scope="row"><?php echo $paquete['paquete']; ?></td>
      <td scope="row"><?php echo $paquete['idr']; ?></td>
      <td scope="row"><?php echo $paquete['nombrec']; ?></td>
      <td scope="row"><?php echo $paquete['est']; ?></td>
      <td scope="row"><?php echo $paquete['pais'] . ' '  . $paquete['col'] . ' ' . $paquete['calle'] . ' N°: ' . $paquete['nc'] ;?></td>
      <td scope="row"><?php echo $paquete['fecha']; ?> </td>
      <td scope="row"> <form class="form" action="pkge.php" method="POST">
          <input type="hidden" value="<?php echo $paquete['paquete']; ?>" name="idp">
          <input type="hidden" value="<?php echo $paquete['est']; ?>" name="estatus">
          <input type="hidden" value="<?php echo $paquete['fecha']; ?>" name="fecha">
          <button type="submit" name="submit" value="submit" class="btn-edit"><i class="fa fa-edit"></i></button>
    </form>
</td>
    </tr>
      <?php }?>
    
    </tbody>
</table>
    <?php break;
}?>
<div class="footer-contactanoserror">
   <?php include_once'recursos/footer.php'?>
   </div>
<?php }else{?>

<?php include_once 'recursos/headern.php';?>




<?php } ?>
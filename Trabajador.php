<?php session_start();
$t = $_SESSION['estatus'];
if(isset($_SESSION['usuario'])){

include_once 'recursos/headerm.php';
switch($t){
    case 'c':
        if(isset($_GET['error'])){
        if($_GET['error'] == "Campos_vacios"){
        echo '<p class="errores alert alert-danger">Algun Campo esta Vacio</p>';
        }                        
        else if($_GET['error'] == "Error_SQL_code_002"){
        echo '<p class="errores alert alert-danger">Error de Comunicacion, Contactar al area informatica</p>';
        }
        }?>
    <div class="contenedore">
        <form class="form" action="pkga.php" method="POST">
        <h2>Datos del paquete</h2>
        <label>Nombre Cliente:</label>
        <input type="text" id="" placeholder="Nombre de Cliente" class="" name="nclie" required>
        <label>E-mail Cliente:</label>
        <input type="email" id="" placeholder="Email del Cliente" class="" name="email_cli" required>
        <label>Id Capturista:</label>
        <input type="text" id="" placeholder="Id de Capturista" class="" name="id_c" required>
        <label>Id Repartidor:</label>
        <input type="text" id="" placeholder="Id de Repartidor" class="" name="id_r" required>
        <label for="opciones">Estatus del Paquete</label>
                        <select name="estatus" id="opciones" required>
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="eb">En Bodega</option>
                            <option value="ec">En Camino</option>
                            <option value="en">Entregado</option>
                            <option value="ca">Cancelado</option>
                        </select>
        <label for="opciones">Fecha Estimada de Entrega</label>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <h2>Direccion de Enterga</h2>
        <label>Pais de destino:</label>
        <select id="opciones" name="pais" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="mx">Mexico</option>
        </select>
        <label>Ciudad:</label>
        <input type="text" id="" placeholder="Ciudad de destino" class="" name="ciudad" required>
        <label>Colonia:</label>
        <input type="text" id="" placeholder="Colonia de destino" class="" name="colonia" required>
        <label>Codigo Postal:</label>
        <input type="text" id="" placeholder="Codigo Postal de destino" class="" name="cp" required>
        <label>Calle del cliente:</label>
        <input type="text" id="" placeholder="Calle de destino" class="" name="calle" required>
        <label>Numero Calle:</label>
        <input type="text" id="" placeholder="Numero de Calle de destino" class="" name="nc" required>
        <input type="hidden" id="" placeholder="" class="" name="trb" value="<?php echo $t ?> ">
        <button type="submit" name="submit" value="submit" class="btn btn-dark"> Registrar </button>
        </form>
    </div>
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
    case 'a': 
    if(isset($_GET['error'])){
        if($_GET['error'] == "Campos_vacios"){
        echo '<p class="errores alert alert-danger">Algun Campo esta Vacio</p>';
        }                        
        else if($_GET['error'] == "Error_SQL_code_002"){
        echo '<p class="errores alert alert-danger">Error de Comunicacion, Contactar al area informatica</p>';
        }
        }?>
    <div class="contenedore">
        <form class="form" action="pkga.php" method="POST">
        <h2>Datos del paquete</h2>
        <label>Nombre Cliente:</label>
        <input type="text" id="" placeholder="Nombre de Cliente" class="" name="nclie" required>
        <label>E-mail Cliente:</label>
        <input type="email" id="" placeholder="Email del Cliente" class="" name="email_cli" required>
        <label>Id Capturista:</label>
        <input type="text" id="" placeholder="Id de Capturista" class="" name="id_c" required>
        <label>Id Repartidor:</label>
        <input type="text" id="" placeholder="Id de Repartidor" class="" name="id_r" required>
        <label for="opciones">Estatus del Paquete</label>
                        <select name="estatus" id="opciones" required>
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="eb">En Bodega</option>
                            <option value="ec">En Camino</option>
                            <option value="en">Entregado</option>
                            <option value="ca">Cancelado</option>
                        </select>
        <label for="opciones">Fecha Estimada de Entrega</label>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <h2>Direccion de Enterga</h2>
        <label>Pais de destino:</label>
        <select id="opciones" name="pais" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="mx">Mexico</option>
        </select>
        <label>Ciudad:</label>
        <input type="text" id="" placeholder="Ciudad de destino" class="" name="ciudad" required>
        <label>Colonia:</label>
        <input type="text" id="" placeholder="Colonia de destino" class="" name="colonia" required>
        <label>Codigo Postal:</label>
        <input type="text" id="" placeholder="Codigo Postal de destino" class="" name="cp" required>
        <label>Calle del cliente:</label>
        <input type="text" id="" placeholder="Calle de destino" class="" name="calle" required>
        <label>Numero Calle:</label>
        <input type="text" id="" placeholder="Numero de Calle de destino" class="" name="nc" required>
        <input type="hidden" id="" placeholder="" class="" name="trb" value="<?php echo $t ?> ">
        <button type="submit" name="submit" value="submit" class="btn btn-dark"> Registrar </button>
        </form>
    </div>
    <?php break;
    default:?>
    Error 404...<br>
    pagina no encontrada
    <?php break;
}?>
   <?php include_once'recursos/footer.php'?>
<?php }else{?>

<?php include_once 'recursos/headern.php';?>




<?php } ?>
<?php
$idpaquete = $_POST['idp'];
$estatus = $_POST['estatus'];
$fecha = $_POST['fecha'];?>
<form class="form" action="actpkg.php" method="POST">
    <input type="hidden" value="<?php echo $idpaquete; ?>" name="idp">
    <label for="opciones">Estatus del Paquete</label>
                        <select name="estatus" id="opciones" required>
                            <option value="" disabled selected> <?php echo $estatus;?> </option>
                            <option value="eb">En Bodega</option>
                            <option value="ec">En Camino</option>
                            <option value="en">Entregado</option>
                            <option value="ca">Cancelado</option>
                        </select>
    <label for="fecha">Fecha:</label>
    <input type="date" value="<?php echo $fecha; ?>" name="fecha" required>
    <button type="submit" name="actualizar" value="actualizar" class="btn btn-primary"> Actualizar </button>
</form>
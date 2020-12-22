<?php
session_start();
if(isset($_SESSION['usuario'])){
include_once 'recursos/header.php';?>

    <main class="contenedord">
        <h2 class="fw-300 centrar-texto">Llena el formulario de Contacto</h2>
        
        <?php
        if(isset($_GET['mensaje'])){
        if($_GET['mensaje'] == "enviado"){
            echo '<center>
            <p class="alert alert-success">¡Listo!, nosotros nos pondremos en contacto</p>
            <p><img src="img/enviado.png" alt="enviado"></p> </center>';
        }
    } ?>
        <form class="contacto" action="recursos/Ecorreo.php" method="post">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="Tu Nombre" name="nombre" required>

                <label for="email">E-mail: </label>
                <input type="email" id="email" placeholder="Tu Correo electrónico" name="correo" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" placeholder="Tu Teléfono" name="tel" required>

                <label for="mensaje">Mensaje: </label>
                <textarea  id="mensaje" name="mensaje" required></textarea>

            </fieldset>
            <button type="sumbit" value="Envialo (si te atreves :P)"  class="btn btn-dark">Enviar</button>
        </form>
    </main>
    <?php include_once'recursos/footer.php'?>
    <?php }else{
include_once 'recursos/headern.php';?>
<div class="alert alert-danger contenedor">
<p>Inicie session para obtener acceso</p>
</div>
<div class="footer-contactanoserror">
<?php include_once'recursos/footer.php'?>
</div>

<?php }?>
    

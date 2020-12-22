
<?php session_start();
if(isset($_SESSION['usuario'])){
include_once 'recursos/header.php'; ?>
<?php if(isset($_GET['login'])){
    if($_GET['login'] == "logeado"){
    echo '<p class="alert alert-success">Inicio de secion Correcto</p>';
                        }
                    }?>
                                <?php 
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "Campos_vacios"){
                            echo '<p class="errores alert alert-danger">Introdusca un codigo valido</p>';
                        }                        
                        else if($_GET['error'] == "Error_SQL_code_003"){
                            echo '<p class="errores alert alert-danger">Error al conectarse al sistema</p>';
                        }                        
                    }
                    ?>

<section class="contenedorb">
<form class="form" action="rp.php" method="POST">
<label>Rastrea tu Paquete</label>
<input type="text" id="" placeholder="Codigo del paquete" class="" name="paquete">
<button type="submit" name="submit" value="submit" class="btn btn-white"> Buscar </button>
</form>


</section>
<hr>
<section class="contenedorc">
<h2 class="centrar-texto">¿Como rastreo mi paquete?</h2>
<p>PASO1:</p>
<p>Revisa el ticket de tu paquete.</p>
<center>
<img src="img/paso1.png" width="500" height="400">
</center>
<p>PASO2:</p>
<p>Copia le codigo de rastreo.</p>
<center>
<img src="img/paso2.png">
</center>
<p>PASO3:</p>
<p>Pegalo en el buscador de paquetes.</p>
<img src="img/paso4.png">
<br>
<br>
<br>
<h2 class="centrar-texto">Sobre Nosotros</h2>

<div class="iconos-nosotros">
    <div class="icono">
        <img src="img/icono1.svg" alt="Icono Seguridad">
        <h3>Seguridad</h3>
        <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
    </div>

    <div class="icono">
        <img src="img/icono2.svg" alt="Icono Mejor Precio">
        <h3>El Mejor Precio</h3>
        <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
    </div>

    <div class="icono">
        <img src="img/icono3.svg" alt="Icono a Tiempo">
        <h3>A Tiempo</h3>
        <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
    </div>
</div>
</section>

<?php }else{ 
    include_once 'recursos/headern.php';?>
    <?php 
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "Campos_vacios"){
                            echo '<p class="errores alert alert-danger">Introdusca un codigo valido</p>';
                        }                        
                        else if($_GET['error'] == "Error_SQL_code_003"){
                            echo '<p class="errores alert alert-danger">Error al conectarse al sistema</p>';
                        }                        
                    }
                    ?>

<section class="contenedorb">
<form class="form" action="rp.php" method="POST">
<label>Rastrea tu Paquete</label>
<input type="text" id="" placeholder="Codigo del paquete" class="" name="paquete">
<button type="submit" name="submit" value="submit" class="btn btn-white"> Buscar </button>
</form>


</section>
<hr>
<section class="contenedorc">
<h2 class="centrar-texto">¿Como rastreo mi paquete?</h2>
<p>PASO1:</p>
<p>Revisa el ticket de tu paquete.</p>
<center>
<img src="img/paso1.png" width="500" height="400">
</center>
<p>PASO2:</p>
<p>Copia le codigo de rastreo.</p>
<center>
<img src="img/paso2.png">
</center>
<p>PASO3:</p>
<p>Pegalo en el buscador de paquetes.</p>
<img src="img/paso4.png">
<br>
<br>
<br>
<h2 class="centrar-texto">Sobre Nosotros</h2>

<div class="iconos-nosotros">
    <div class="icono">
        <img src="img/icono1.svg" alt="Icono Seguridad">
        <h3>Seguridad</h3>
        <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
    </div>

    <div class="icono">
        <img src="img/icono2.svg" alt="Icono Mejor Precio">
        <h3>El Mejor Precio</h3>
        <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
    </div>

    <div class="icono">
        <img src="img/icono3.svg" alt="Icono a Tiempo">
        <h3>A Tiempo</h3>
        <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
    </div>
</div>
</section>  
<?php } 
include_once 'recursos/footer.php'?>

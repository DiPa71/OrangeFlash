<?php 
session_start();
if(isset($_SESSION['usuario'])){
    include_once 'recursos/header.php';?>
    <br><br>
    <center>
    <div class="contenedora">
    <nav class="clientes-empleados">
                <a class="cl" href="is.php">Cliente</a>
				<a class="em" href="isep.php">Empleado</a>
            </nav>
        <hr>
            <div class="">
               
                <h2>sesión iniciada</h2>
                
            </div>
            <form action="recursos/logout.php" method="POST">
                <button type="sumbit" class="btn btn-dark">Cerrar sesion</button>
            </form>
    </div>
    </center>
<?php }else{ 
    include_once 'recursos/headern.php';?>
    <br><br>
    <center>
    <div class="contenedora">
    
            <center>
			<nav class="clientes-empleados">
                <a href="is.php">Cliente</a>
				<a href="isep.php">Empleado</a>
            </nav>
            </center>
                        <?php 
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "Campos_vacios"){
                            echo '<p class="errores alert alert-danger">Algun Campo esta Vacio</p>';
                        }                        
                        else if($_GET['error'] == "Error_SQL_code_003"){
                            echo '<p class="errores alert alert-danger">Error SQL Codigo:03</p>';
                        }
                        else if($_GET['error'] == "ContraseñaErronea"){
                            echo '<p class="errores alert alert-danger">Contraseña o Usuario no coinciden, Favor de verificar</p>';
                        }else if($_GET['error'] == "inidicio_sesion"){
                            echo '<p class="errores alert alert-danger">Registrate o Inicia sesion, para tener todas las funciones.</p>';
                        }
                        
                    }
                    
                    ?>
            <h2>Inicio de sesión de empleados</h2>
            
				<form action="recursos/login_Empleados.php" method="POST">
					<input type="text" placeholder="Usuario" id="email_field" name="email_l" required>
                    <br>
                    <br>
                    <input type="password" placeholder="Contraseña" id="password_field" name="password_l" required>
                    <br>
                    <br>
                    <button type="sumbit" name="sumbit" class="btn btn-dark">Iniciar sesión</button>
                </form>
            </div>
        </center>
	<?php }?>
        <?php include_once 'recursos/footer.php'?>

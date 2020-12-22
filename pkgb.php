
    <?php
    if(isset($_POST['borrar'])){
        require('recursos/db/db.php');
        var_dump($_POST);
       $bp = $_POST['id_pb'];
       $sql = "DELETE FROM paquetes WHERE id='$bp'";
       /*if(mysqli_query($conn, $sql)){
        header("Location: Trabajador.php?login=borrado_exitoso");
        exit();
       }else{
        header("Location: Trabajador.php?error=no_paquete");
        exit();   
       }
    }else{
        header("Location: Trabajador.php");
        exit();     
    }?>
*/ }?>
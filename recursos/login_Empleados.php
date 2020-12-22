<?php
if(isset($_POST['sumbit'])){
require 'db/db.php';
$user = $_POST['email_l'];
$pass = $_POST['password_l'];
if( empty($user) || empty($pass)){
header("Location: ../isep.php?error=Campos_vacios");
exit();
}else{
    $sql = "SELECT * FROM empleados WHERE user =?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../isep.php?error=Error_SQL_code_003");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($resultado)){
            if($pass == $row['pwd']){
                session_start();
                $_SESSION['id']=$row['id'];
                $_SESSION['usuario']=$row['user'];
                $_SESSION['pass']=$row['pwd'];
                $_SESSION['nombre']=$row['names'];
                $_SESSION['estatus']=$row['sta'];
                
                header("Location: ../Trabajador.php?error=logeado");
                exit();  
            }else{
                header("Location: ../isep.php?error=ContraseñaErronea");
                exit();   
            }
        }else{
            header("Location: ../isep.php?error=ContraseñaErronea");
            exit(); 
        }
    }
}
}

else{
    header("Location: ../../isep.php?error=noestalogueado");
    exit();     
}
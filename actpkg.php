<?php
    include_once('recursos/db/db.php');
        if(isset($_POST['actualizar'])){
            require('recursos/db/db.php');
            $idpaquete = $_POST['idp'];
            $estatus = $_POST['estatus'];
            $fecha = $_POST['fecha'];

                switch($estatus){
                    case 'eb':
                        $estatus = "En Bodega";
                    break;
                    case 'ec':
                        $estatus = "En Camino";
                    break;
                    case 'en':
                        $estatus = "Entregado";
                    break;
                    case 'ca':
                        $estatus = "Cancelado";
                    break;
                    default:
                        $estatus = "Estatus no disponible";
                    break;
                }
                if(empty($fecha) || empty($estatus) || empty($idpaquete)){
                    
                    header("Location: pkgl.php?error=Campos_vacios");
                    exit();
                }else{
                    $sql = "UPDATE paquetes SET status_p = '$estatus', fecha_est = '$fecha' WHERE codigop = '$idpaquete'";
                    $stmt= mysqli_stmt_init($conn);
                    if(mysqli_query($conn, $sql)){
                        header("Location: pkgl.php?login=actualizacionexitosa");
                        exit();
                       }else{
                        header("Location: Trabajador.php?error=No_se_actualizo");
                        exit();   
                       }
                    }
            
        mysqli_stmt_close($stmt);
        mysqli_close($conn); 
    }else{
        header("Location: pkgl.php");
        exit();     
    }
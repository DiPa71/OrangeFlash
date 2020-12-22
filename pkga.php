<?php
    include_once('recursos/db/db.php');
        if(isset($_POST['submit'])){
            require('recursos/db/db.php');
            $t = $_POST['trb'];
            $cop = date("d"). gend() . date("m") . genu() . date("Y"). gentr();
            $nclie = $_POST['nclie'];
            $email_cli = $_POST['email_cli'];
            $id_c = $_POST['id_c'];
            $id_r = $_POST['id_r'];
            $fecha = $_POST['fecha'];
            $ciudad = $_POST['ciudad'];
            $colonia = $_POST['colonia'];
            $cp = $_POST['cp'];
            $calle = $_POST['calle'];
            $nc = $_POST['nc'];
        
            if(isset($_POST['pais'])) {
                $pais = $_POST['pais'];
                switch($pais){
                    case 'mx':
                        $pais = "Mexico";
                    break;
                    default:
                        $pais = "Pais no disponible";
                    break;
                }
            if(isset($_POST['estatus'])) {
                $estatus = $_POST ['estatus'];
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
                if(empty($nclie) || empty($email_cli) || empty($id_c) || empty($id_r) || empty($fecha) || empty($ciudad) || empty($colonia) || empty($calle) || empty($cp) || empty($nc)){
                    
                    header("Location: Trabajador.php?error=Campos_vacios");
                    exit();
                }else{
                    $sql = "INSERT INTO paquetes (codigop, nclie , email_cli, clvc, clvr, status_p, fecha_est, pais, cp, calle, numc, colonia, ciudad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
                    $stmt= mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: Trabajador.php?error=Error_SQL_code_002");
                        exit();
                    }else{
                        mysqli_stmt_bind_param($stmt, "sssssssssssss", $cop, $nclie, $email_cli, $id_c, $id_r, $estatus, $fecha,  $pais, $cp, $calle, $nc, $colonia, $ciudad);
                        mysqli_stmt_execute($stmt);
                        header("Location: Trabajador.php?login=RegistroExitoso");
                        exit();
                    }
                }
            }

        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn); 
    }else{
        header("Location: Trabajador.php");
        exit();     
    }

    function gend($length = 2) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function genu($length = 1) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function gentr($length = 14) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }?>
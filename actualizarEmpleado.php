<?php
    if(isset($_POST)){
        require_once "./includes/conexion.php";
        require_once "./helpers/consultas.php";
        $nombre=$_POST['nombre'];
        $sueldo=$_POST['sueldo'];
        $puesto=$_POST['puesto'];
        $correo=$_POST['correo'];
        $contrato=$_POST['contrato'];
        $sexo=$_POST['sexo'];
        $edad=$_POST['edad'];
        $id=$_SESSION['empleadoUpdate']['id'];
        $sql="UPDATE usuarios SET nombre='$nombre', sueldo=$sueldo, puesto='$puesto', correo='$correo', contrato='$contrato', sexo='$sexo', edad=$edad WHERE id='$id';";
        $queryResult=actualizarProducto($db,$sql);
        if(!$queryResult){
            $_SESSION['errorUpdate']="Error al actualizar el empleado";
        }
        unset($_SESSION['empleadoUpdate']);
        header("Location: empleados.php");
    }
?>
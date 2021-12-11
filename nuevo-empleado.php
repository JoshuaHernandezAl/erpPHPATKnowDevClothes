<?php
    if(isset($_POST)){
        require_once "./includes/conexion.php";
        require_once "./helpers/consultas.php";
        $nombre=$_POST['nombre'];
        $sueldo=$_POST['sueldo'];
        $puesto=$_POST['puesto'];
        $correo=$_POST['correo'];
        $contrato=$_POST['contrato'];
        $edad=$_POST['edad'];
        $sexo=$_POST['sexo'];
        $contra=$_POST['pass'];
        $sucursal=$_SESSION['usuario']['sucursal'];
        $sql="INSERT INTO usuarios VALUES ('$nombre',$sueldo,'$sucursal','$puesto','$correo','$contrato','$sexo',$edad,1,'$contra');";
        $queryResult=nuevoEmpleado($db,$sql);
        if(!$queryResult){
            $_SESSION['errorRegistrar']="Error al registrar empleado";
            header("Location: empleados.php");
        }
        header("Location: empleados.php");
    }
?>
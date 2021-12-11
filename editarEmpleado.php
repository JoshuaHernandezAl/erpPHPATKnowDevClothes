<?php

require_once "includes/conexion.php";
require_once "helpers/consultas.php";
if(isset($_GET['id'])){    
    $id=$_GET['id'];
    $empleado=editarEmpleado($db,$id);
    if(sizeof($empleado)>=1){
        $_SESSION['empleadoUpdate']=$empleado;
        $_SESSION['empleadoUpdate']['categoria']=$categoria;
        if(isset($_SESSION['errorEmpleado'])){
            unset($_SESSION['errorEmpleado']);
        }
        header("Location: editarEmpleadoForm.php");
    }else{
        $_SESSION['errorEmpleado']='No existe el empleado';
        header("Location: empleados.php");
    }
}else{
    header("Location: erp.php");
}

?>
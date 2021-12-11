<?php

require_once "includes/conexion.php";
require_once "helpers/consultas.php";
if(isset($_GET ['categoria'])&& $_GET['id']){    
    $categoria=$_GET['categoria'];
    $id=$_GET['id'];
    $sql="DELETE FROM $categoria WHERE id='$id'";
    $borrado=borrarProducto($db,$sql);
    if($categoria=='usuarios'){
        $categoria='empleados';
    }
    if($borrado){
        header("Location: $categoria.php");
    }else{
        $_SESSION['errorBorrar']="Error al borrar el producto";
        header("Location: $categoria.php");
    }
}else{
    header("Location: erp.php");
}

?>
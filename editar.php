<?php

require_once "includes/conexion.php";
require_once "helpers/consultas.php";
if(isset($_GET ['categoria'])&& $_GET['id']){    
    $categoria=$_GET['categoria'];
    $id_producto=$_GET['id'];
    $producto=editarProducto($db,$categoria,$id_producto);
    if(sizeof($producto)>=1){
        $_SESSION['productoUpdate']=$producto;
        $_SESSION['productoUpdate']['categoria']=$categoria;
        if(isset($_SESSION['errorProducto'])){
            unset($_SESSION['errorProducto']);
        }
        header("Location: editarForm.php");
    }else{
        $_SESSION['errorProducto']='No existe el producto';
        header("Location: $categoria.php");
    }
}else{
    header("Location: erp.php");
}

?>
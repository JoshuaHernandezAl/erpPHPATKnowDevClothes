<?php
    if(isset($_POST)){
        require_once "./includes/conexion.php";
        require_once "./helpers/consultas.php";
        $modelo=$_POST['modelo'];
        $precio=$_POST['precio'];
        $talla=$_POST['talla'];
        $descripcion=$_POST['descripcion'];
        $color=$_POST['color'];
        $stock=$_POST['stock'];
        $categoria=$_SESSION['productoUpdate']['categoria'];
        $id=$_SESSION['productoUpdate']['id'];
        $sql="UPDATE $categoria SET modelo='$modelo', precio='$precio', talla='$talla', descripcion='$descripcion', color='$color', stock='$stock' WHERE id='$id';";
        $queryResult=actualizarProducto($db,$sql);
        if(!$queryResult){
            $_SESSION['errorUpdate']="Error al actualizar el producto";
        }
        unset($_SESSION['productoUpdate']);
        header("Location: $categoria.php");
    }
?>
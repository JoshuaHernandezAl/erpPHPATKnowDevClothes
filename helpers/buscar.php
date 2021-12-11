<?php
require_once "../includes/conexion.php";
require_once "./consultas.php";

if(isset($_POST)){    
    $categoria=trim($_POST['categoria']);
    $producto=trim($_POST['producto']);
    busqueda($db,$producto,$categoria);
    header("Location: ../$categoria.php");
}else{
    header("Location: ../erp.php");
}
?>
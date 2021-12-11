<?php
    require_once "../includes/conexion.php";
    session_destroy();
    header('Location:../index.php')
?>
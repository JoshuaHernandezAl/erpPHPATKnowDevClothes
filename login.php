<?php

require_once "includes/conexion.php";
if(isset($_POST)){    
    $nombre=trim($_POST['nombre']);
    $contra=trim($_POST['contra']);
    $sql="SELECT * FROM usuarios WHERE nombre='$nombre' AND contra='$contra' AND estado=1;";    
    $queryResult = odbc_exec( $db, $sql );
    $data=odbc_fetch_array($queryResult);        
    if($data){
        $_SESSION['usuario']=$data;
        if(isset($_SESSION['errorLogin'])){
            $_SESSION['errorLogin']=null;
        }
    }else{
        $_SESSION['usuario']=null;
        $_SESSION['errorLogin']="Credenciales incorrectas";
    }
}
header('Location: erp.php');
?>
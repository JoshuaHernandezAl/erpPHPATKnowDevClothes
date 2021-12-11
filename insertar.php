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
        $categoria=$_POST['categoria'];
        $id=$_SESSION['usuario']['id'];
        $imagen=$_FILES['imagen']['tmp_name'];
        $destino=__DIR__."/files/".$categoria."/".$_FILES['imagen']['name'];
        $sql="INSERT INTO $categoria VALUES ('$modelo',$precio,'$talla','$descripcion','$color','".$_FILES['imagen']['name']."',$stock,1,1,$id);";
        $fileUpload=move_uploaded_file($imagen,$destino);
        if($fileUpload){
            $queryResult=insertarProducto($db,$sql);
            if(!$queryResult){
                $_SESSION['errorRegistrar']="Error al registrar el producto";
                header("Location: nuevo-producto.php");
            }
            header("Location: $categoria.php");
        }else{
            $_SESSION['errorRegistrar']="Error al registrar el producto";
            header("Location: nuevo-producto.php");
        }
    }
?>
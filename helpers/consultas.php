<?php
    function listarPlayeras($db){
        $query="SELECT TOP(5) id,modelo,precio,talla,color,imagen,stock,disponible FROM playeras ORDER BY stock DESC;";
        $queryResult = odbc_exec( $db, $query );
        $resultado = array();
        if($queryResult){
            while($row = odbc_fetch_array($queryResult)){
                array_push($resultado,$row);
            }
        }
        return $resultado;
    }
    function listarSudaderas($db){
        $query="SELECT TOP(5) id,modelo,precio,talla,color,imagen,stock,disponible FROM sudaderas ORDER BY stock DESC;";
        $queryResult = odbc_exec( $db, $query );
        $resultado = array();
        if($queryResult){
            while($row = odbc_fetch_array($queryResult)){
                array_push($resultado,$row);
            }
        }
        return $resultado;
    }

    function listarTodasPlayeras($db){
        $query="SELECT id,modelo,precio,talla,color,imagen,stock,disponible FROM playeras;";
        $queryResult = odbc_exec( $db, $query );
        $resultado = array();
        if($queryResult){
            while($row = odbc_fetch_array($queryResult)){
                array_push($resultado,$row);
            }
        }
        return $resultado;
    }
    function listarTodasSudaderas($db){
        $query="SELECT id,modelo,precio,talla,color,imagen,stock,disponible FROM sudaderas;";
        $queryResult = odbc_exec( $db, $query );
        $resultado = array();
        if($queryResult){
            while($row = odbc_fetch_array($queryResult)){
                array_push($resultado,$row);
            }
        }
        return $resultado;
    }

    function listarEmpleados($db){
        $query="SELECT id,
        nombre,
        sueldo,
        puesto,
        correo,
        contrato,
        edad,
        sexo,
        sucursal FROM usuarios WHERE estado=1;";
        $queryResult = odbc_exec( $db, $query );
        $resultado = array();
        if($queryResult){
            while($row = odbc_fetch_array($queryResult)){
                array_push($resultado,$row);
            }
        }
        return $resultado;
    }
    function busqueda($db,$producto,$categoria){
        $sql="SELECT id,modelo,precio,talla,color,imagen,stock,disponible FROM $categoria  WHERE modelo LIKE '%$producto%' GROUP BY  id,modelo,precio,talla,color,imagen,stock,disponible;";
        $queryResult = odbc_exec( $db, $sql );
        $data = array();
        if($queryResult){
            while($row = odbc_fetch_array($queryResult)){
                array_push($data,$row);
            }
        }
        if($data){
            $_SESSION['producto']=$data;
            $_SESSION['producto']['categoria']=$categoria;

            if(isset($_SESSION['errorBusqueda'])){
                unset($_SESSION['errorBusqueda']);
            }
        }else{
            unset($_SESSION['producto']);
            $_SESSION['errorBusqueda']="No existe un producto con ese modelo";
        }
    }
    function editarProducto($db,$categoria,$id_producto){
        $sql="SELECT id,modelo,precio,talla,descripcion, color,imagen,stock FROM $categoria WHERE id=$id_producto";
        $queryResult = odbc_exec( $db, $sql );
        $data=odbc_fetch_array($queryResult);
        if($data){
            return $data;
        }else{
            return null;
        }
    }
    function actualizarProducto($db,$sql){
        $queryResult = odbc_exec( $db, $sql );
        if($queryResult){
            return true;
        }else{
            return false;
        }
    }
    function insertarProducto($db,$sql){
        $queryResult = odbc_exec( $db, $sql );
        if($queryResult){
            return true;
        }else{
            return false;
        }
    }
    function borrarProducto($db,$sql){
        $queryResult = odbc_exec( $db, $sql );
        if($queryResult){
            return true;
        }else{
            return false;
        }
    }
    function nuevoEmpleado($db,$sql){
        $queryResult = odbc_exec( $db, $sql );
        if($queryResult){
            return true;
        }else{
            return false;
        }
    }
    function editarEmpleado($db,$id){
        $sql="SELECT * FROM usuarios WHERE id='$id'";
        $queryResult = odbc_exec( $db, $sql );
        $data=odbc_fetch_array($queryResult);
        if($data){
            return $data;
        }else{
            return null;
        }
    }
?>
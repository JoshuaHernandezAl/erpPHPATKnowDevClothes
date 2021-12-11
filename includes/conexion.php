<?php

$dsn = "Driver={SQL Server};
Server=DESKTOP-8LABJ82;Database=devClothes ;Integrated Security=SSPI;Persist Security Info=False;";
//debe ser de sistema no de usuario
$usuario = "joshua";
$clave="hola";

//realizamos la conexion mediante odbc
$db=odbc_connect($dsn, $usuario, $clave);

if (!$db){
	exit("<strong>Error en conexion a base de datos.</strong>");

}
//iniciar sesion
if(!isset($_SESSION)){
	session_start();
}
?>

<?php
require_once("C:\wamp64\www\Crud\Model\Conexion.php");
$con=Modelo::Conexion();
// cambio
// Otro cambio
$correo=$_POST['email'];
$nombres=$_POST['nombres'];
$cedula=$_POST['cedula'];

$sql="INSERT INTO clientes VALUES('0','$cedula','$nombres','$correo')";
$query= mysqli_query($con,$sql);
//echo  $sql;
if($query){
    Header("Location: Index.php");
    
}else {
}
?>

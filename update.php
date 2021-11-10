<?php

require_once("C:\wamp64\www\Crud\Model\Conexion.php");
$con=Modelo::Conexion();

$ID=$_POST['id'];
$correo=$_POST['email'];
$nombres=$_POST['nombres'];
$cedula=$_POST['cedula'];

$sql="UPDATE clientes SET NOMBRE='$nombres', CEDULA='$cedula', EMAIL='$correo' WHERE ID='$ID'";
//echo $sql;
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>
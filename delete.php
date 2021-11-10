<?php

require_once("C:\wamp64\www\Crud\Model\Conexion.php");
    $con=Modelo::Conexion();

$ID=$_GET['id'];

$sql="DELETE FROM clientes  WHERE ID='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>

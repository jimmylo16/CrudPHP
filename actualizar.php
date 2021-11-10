<?php 
    require_once("C:\wamp64\www\Crud\Model\Conexion.php");
    $con=Modelo::Conexion();
    $id=$_GET['id'];
    // prueba de git
    $sql="SELECT * FROM clientes WHERE ID='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row[0]  ?>">
                                
                                <input type="text" class="form-control mb-3" name="cedula" placeholder="Dni" value="<?php echo $row[1]  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row[2]  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="Correo" value="<?php echo $row[3]  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
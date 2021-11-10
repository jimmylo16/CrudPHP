<?php 
    require_once("C:\wamp64\www\Prueba\Model\Conexion.php");
    $conexion=Modelo::Conexion();

    $query="SELECT *  FROM clientes";
    $resultado = mysqli_query($conexion,$query);
    $string="";    
    while ($var_fila=$resultado->fetch_array()){
                $string=$string. "<tr>
                <th> $var_fila[0]</th>
                <th> $var_fila[1]</th>
                <th> $var_fila[2]</th>
                <th> $var_fila[3]</th>    
                <th><a href='actualizar.php?id=$var_fila[0]' class='btn btn-info'>✏️Editar</a></th>
                <th><a href='delete.php?id=$var_fila[0]' class='btn btn-danger'>🗑️Eliminar</a></th>                                        
                </tr>";
                
        } 
        echo  $string;
?>

                                           
                                            
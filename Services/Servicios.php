<?php
    class servicios {
        private $conexion;
        function __construct($conexion)
        {
            $this->conexion=$conexion;
        }
        public function Lista (){
            $query="SELECT *  FROM clientes";
            $resultado = mysqli_query($this->conexion,$query);
            $var_fila=$resultado->fetch_array();
            while ($var_fila){
                echo "<tr>
                <th> $var_fila[0]</th>
                <th> $var_fila[1]</th>
                <th> $var_fila[2]</th>
                <th> $var_fila[3]</th>    
                <th><a href='actualizar.php?id=$var_fila[0]' class='btn btn-info'>✏️Editar</a></th>
                <th><a href='delete.php?id=$var_fila[0]' class='btn btn-danger'>🗑️Eliminar</a></th>                                        
                </tr>";
            } 
        }
    }
?>
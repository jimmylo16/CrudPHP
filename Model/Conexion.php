<?php 
    class Modelo {
        public static function  Conexion() {

            $usuario="root";
            $contra="";
            $base_datos="aviatur";
            $equipo="localhost";
        
            $conexion =  mysqli_connect($equipo,$usuario,$contra,$base_datos);
            return $conexion;
        } 
        public static function  Lista() {

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
            return $string;
        } 
        public function  Insertar() {

            $con=Modelo::Conexion();
            echo "<h1>ola</h1>";
            
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
            
            
        }
        
    }
    
    
 
?>
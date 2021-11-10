<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA USUARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">  
                                <div class="container mt-3">
                                <h3>Ingrese datos</h3>
                                
                                
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Agregar Usuario
                                </button>
                                </div>
                                
                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                
                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">Insertar Usuario</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                <form action="insertar.php" method="POST">
                                    <input type="number" class="form-control mb-3" name="cedula" placeholder="cedula">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres">
                                    <input type="email" class="form-control mb-3" name="email" placeholder="Correo">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                                
                                </div>
                                </div>
                                </div>
                        </div>

                        <div class="col-md-8">
                            <table class="table"  >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>CEDULA</th>
                                        <th>NOMBRE</th>
                                        <th>CORREO</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php 
                                            require_once("C:\wamp64\www\Crud\Model\Conexion.php");
                                            $con=Modelo::Lista();
                                            echo $con;
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
           <script src="./js/main.js"></script>           
    </body>
</html>
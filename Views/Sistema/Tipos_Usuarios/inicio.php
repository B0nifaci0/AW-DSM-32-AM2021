<?php
include('../../Layout/Sistema/HeaderSis.php');
include('../../Layout/Sistema/Menu.php');
include('../../Layout/Sistema/Foter.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Custom styles for this page -->
       <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="container-fluid">

    <!-- DataTales Example -->
       <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Usuarios Registrados</h6>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="http://localhost:8888/AW-DSM-32-AM2021/Views/SISTEMA/Tipos_Usuarios/add.php" class="btn btn-primary me-md-2" type="button">Agregar Usuario</a>
                </div>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                 <thead>
                        <tr>
                            <th>clave</td>
                            <th>Nombre</th>
                            <th>Status</th>
                            <th>Operaciones</th>
                         
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>001</th>
                            <th>admin</th>
                            <th><strong>Activo</strong></th>
                            <th> 
                                <buttton class="btn btn-md btn-primary"><i class="fas fa-eye"></i></buttton>
                                <buttton class="btn btn-md btn-warning"><i class="fas fa-pen"></i></buttton> 
                                <buttton class="btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></buttton>
                            </th>
                        </tr>
                        <tr>
                            <th>001</th>
                            <th>Vendedor</th>
                            <th><strong>Activo</strong></th>
                            <th> 
                                <buttton class="btn btn-md btn-primary"><i class="fas fa-eye"></i></buttton>
                                <buttton class="btn btn-md btn-warning"><i class="fas fa-pen"></i></buttton> 
                                <buttton class="btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></buttton>
                            </th>
                        </tr>
                        <tr>
                            <th>001</th>
                            <th>Sub-admin</th>
                            <th><strong>Activo</strong></th>
                            <th> 
                                <buttton class="btn btn-md btn-primary"><i class="fas fa-eye"></i></buttton>
                                <buttton class="btn btn-md btn-warning"><i class="fas fa-pen"></i></buttton> 
                                <buttton class="btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></buttton>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <th>001</th>
                            <th>PEDRO</th>
                            <th>pruebitas@gmail.com</th>
                        
                            <th> 
                                <buttton class="btn btn-md btn-primary"><i class="fas fa-eye"></i></buttton>
                                <buttton class="btn btn-md btn-warning"><i class="fas fa-pen"></i></buttton> 
                                <buttton class="btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></buttton>
                            </th>
                        </tr>
                    </tbody>

                 </table>
            </div>
        </div>
    </div>
</div>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>

</html>

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
        <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Agregar  Tipo De Usuario</h6>
         </div>
         <form  method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <label for="clave">Clave:</label>
                        <input class="form-control" placeholder="1" type="text">
                    </div>
                    <div class="col">
                        <label for="clave">Tipo Usuario:</label>
                        <input class="form-control" placeholder="Admin" type="text">
                    </div>
                    <div class="col">
                        <label for="clave">Status:</label>
                        <input class="form-control" placeholder="Activo" type="text">
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">Guardar</button>
                </div>   
            </div>   
    </form>
</body>
</html>
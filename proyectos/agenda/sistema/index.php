<?php

session_start();
if (!isset($_SESSION['user_id'])) {

    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- datatables responsive  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.1/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

    <!-- Estilos propios  -->
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>

<body>

    <?php include "../sistema/vistas/header.php"  ?>


    <div class="container">
        <h1 class="text-center">AGENDA DE CONTACTOS</h1>

        <div class="d-flex justify-content-start mb-5">
            <a class="btn btn-success" href="./agregar_contacto.php">Nuevo Registro</a>
        </div>

        <div>
            <table class="table table-striped table-bordered nowrap" style="width:100%" id="tabla-contactos">
                <thead>
                    <tr>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Correo Electronico</th>
                        <th>Domicilio completo (Address, City, Prov, Country</th>
                        <th>Fecha de nacimiento</th>
                        <th>Estado Civil</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Edgardo</td>
                        <td>Cometto</td>
                        <td>0351-7525863</td>
                        <td>ecometto@hotmail.com</td>
                        <td>peredo 1067, cordoba, cordoba, Argentina</td>
                        <td>31/03/1980</td>
                        <td>Otros</td>
                    </tr>
                </tbody>
            </table>
        </div>



    </div>



    <?php include "../sistema/vistas/footer.php"  ?>








    <!-- jquery  -->
    <script src="./js/jquery-3.6.0.min.js"></script>

    <!-- datatables responsive  -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.1/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>

    <!-- js propio  -->
    <script src="./js/app.js"></script>
    <script>
        $(document).ready(function() {

            // datatables 
            var table = $('#tabla-contactos').DataTable({
                responsive: true,
                language: {
                    processing: "Procesando...",
                    search: "Buscar:",
                    lengthMenu: "Buscar _MENU_ elementos",
                    info: "Mostrando _START_ hasta _END_ de _TOTAL_",
                    infoEmpty: "No hay elementos disponibles",
                    infoFiltered: "(Sin resultados)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    paginate: {
                        first: "Primero",
                        previous: "Previo",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": Orden Ascendente",
                        sortDescending: ": Orden Descendente"
                    }
                }
            });
            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
</body>

</html>
<?php
include 'librerias.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>LOGIN</title>
</head>

<body>
    <a href="../../index.html"><button class="volver btn btn-danger my-1">VOLVER</button></a>

    <div class="container d-flex justify-content-center align-items-center text-center">

        <div class="contenedor-index w-50 bg-light mt-3 d-flex flex-column justify-content-center align-items-center text-center">

            <form id="formulario" class="w-75" action="">
                <div>
                    <h5 class="bienvenido pt-3">BIENVENIDO <br> SISTEMA DE INVENTARIOS</h5>
                    <img class="img-user" src="imagenes/user.webp" alt="user">
                </div>
                <div class="form-group my-3 ">
                    <label for="usuario">Usuario: </label>
                    <input class="form-control" type="email" id="usuario" required placeholder="Ingrese e-mail de registro">
                </div>

                <div class="form-group mb-1">
                    <label for="clave">Clave: </label>
                    <input class="form-control" type="password" id="clave" required placeholder="Ingrese su clave">
                </div>
                <!-- <p class="alert " id="mensaje">Ingrese sus Datos</p> -->
                <div class="data-login">
                    <p>Usuario: ecometto@hotmail.com <br> Pass: 123</p>
                </div>

                <button type="submit" class="btn btn-primary my-3" id="validar">ACEPTAR</button>
            </form>
            <p class="powered">powered by <span class="fw-bold fst-italic"> CED</span></p>
        </div>



        <script src="controlador/funciones.js"></script>
        <script>
            var user = document.getElementById('usuario').focus()
        </script>

    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de proyectos</title>
    <meta name="description" content="Curriculum Vitae de Edgardo Cometto. www.ecometto.com.ar para servicios de diseño y programacion web">
    <!-- bootstrap styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- iconos -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- estilos propios -->
    <link rel="stylesheet" href="./css/styles.css" />

</head>

<body>
    <header>
        <?php // include "./views/header.php";
        include "./views/nav.php";
        ?>
    </header>

    <div class="container my-3 bg-light py-3 ">
        <h3 class=" mt-3 py-1 h3-title">ALGUNOS PROYECTOS.. </h3>
        <div class="p-2">


            <div class="text-dark projectDiv  border rounded p-4 my-3 ">
                <h5>PROYECTOS / PRUEBAS REACT.</h5>
                <p> <b> REACT HOOKS:</b> ReactRouter, UseState, UseEffect, useRef, Props, Fetch Api, entre otros </p>
                <a class="link-info m-2 p-2" href="react/index.html"> Pruebas con REACT...</a>
            </div>

            
            <div class="text-dark projectDiv border rounded p-4 my-3">
                <h5>PROYECTOS / PROGRAMAS CON USO DE BASES DE DATOS. RESPONSIVE</h5>
                <p> <b> Tecnologías/ Lenguajes:</b> HTML, CSS, JS, BOOTSTRAP, JQUERY, AJAX, BOOTSTRAP, PHP, MYSQL, DATATABLES</p>
                <p> <b>Nota:</b> Imágenes, datos y texto de prueba (NO REALES). </p>
                
                <a class="link-info m-2 p-2" href="proyectos/inventario/index.php"> Proyecto Sistema de Inventario...</a> <br>
                <a class="link-info m-2 p-2" href="proyectos/agenda/index.php"> Agenda de contactos...</a>    
            </div>

            <div class="text-dark projectDiv border rounded p-4 my-3">
                <h5>PROYECTOS SINGLE PAGE</h5>
                <p>SINGLE PAGE. RESPONSIVE <br>
                    <b> Tecnologías/ Lenguajes:</b> HTML, CSS, JS, BOOTSTRAP, SCROLLREVEAL
                </p>
                <p> <b>Nota:</b> Imágenes, datos y texto de prueba (NO REALES). </p>
    
                <a class="link-info m-2 p-2" href="proyectos/panaderiaDC/index.html"> Proyecto Panaderia Dulce Catalina...</a> <br>
                <a class="link-info m-2 p-2" href="proyectos/adoquinesWEB/index.html"> Proyecto Prueba ADOQUINCOR...</a>
            </div>
        </div>
        
        <p><b>NOTA: </b> Esta página de proyectos es dinámica y muchos de los proyectos realizados en meses anteriores van quedando "desactualizados" ya que diariamente voy adquiriendo nuevos conocimientos, lo que me permite la mejora continua de la codificación. <br>
        </p>



        <div>
            <div class="d-flex align-items-center justify-content-center">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_hntzYU.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                    <!--controls-->
                </lottie-player>
            </div>

            <div class="container enConstruccion mb-5 text-dark">
                <h3 class="text-center">EN CONSTANTE ACTUALIZACION</h3>
            </div>
        </div>
    </div>


    <footer>
        <?php include "./views/footer.php";
        ?>
    </footer>


    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="app.js"></script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Solicitudes de servicios</title>
    <style>
        a {
            text-decoration: none;
            color: whitesmoke
        }
        .contenedor{
            margin:100px auto 20px auto;
            width: 600px;
            height: 100%;    
            height: 1500px;     
        }
        body{
            background-image: url('./ingenieria.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
        }
    </style>
</head>

<body>

    <header class="fixed-top">
        <?php // include "../views/header.php";
        include "../views/nav.php";
        ?>
    </header>


    <div class="contenedor">
      
        <div style="overflow: visible;">
            <iframe  style="overflow: visible;" width="640px" height="1280px" src="https://forms.office.com/Pages/ResponsePage.aspx?id=SRudSU5c60-fuHKUu9pmfAeCiMs-BVFJhJMMkx1JW19UMVFGRjJJOFFOSE8zTzNDUkZCNjZNTUhPQy4u&embed=true" frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
        </div>

        <div>
            <a onclick="return confirmar()" href="https://forms.office.com/Pages/DesignPageV2.aspx?subpage=design&FormId=SRudSU5c60-fuHKUu9pmfAeCiMs-BVFJhJMMkx1JW19UMVFGRjJJOFFOSE8zTzNDUkZCNjZNTUhPQy4u&Token=1db125cc0c3e4b99acf8e8cfb5aae688">Acceso a datos de formulario</a>
        </div>
    </div>

<script>
    function confirmar(){
        let res = prompt("Accediendo a zona protegida \nIngrese su clave")
        if (res!='1234'){return false}
    }
</script>
</body>


</html>
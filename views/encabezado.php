<style>
    .header {
        position: -webkit-sticky;
        position: sticky;
    }

    .cabecera {
        background-image: url('./img/fondo.jpg');
    }

    .card {
        max-width: 320px;
        background-color: rgba(250,250, 250, 0.8);
    }

    .card-text{
        background-color: rgba(256, 256, 256, 0.5);
        padding-left: 5px;
        font-weight: 500;
        font-size: 18px;
    }

    .txt-machine {
        width: 400px;
        background-color: rgba(0, 0, 0, 0.5);
        box-shadow: 10px 10px 10px rgba(0,0,250,0.5);
        margin-bottom: 20px;
    }

    @media screen and (max-width: 768px) {
        
        ul{
            display:flex;
            flex-direction: column;
        }
        li{
            margin: 5px;
        }
    }

</style>
<div class="header container-fluid bg-dark text-light">

    <div class="cabecera row">
        <div class="col-md-6 d-flex justify-content-center">
            <div class="card border rounded text-center text-dark my-3">
                <div class="card-body">
                    <img class="rounded-circle mb-3" src="./img/Presentación1.jpg" alt="ECometto" width="150px">
                    <h5 class="card-title">Lic. Edgardo Cometto </h5>
                    <p class="card-text text-start">
                        * Lic. Organizacion Industrial <br>
                        * Apasionado de la programación <br>
                        * Autodidacta <br>
                        * Adaptable a los cambios <br>
                        * Busqueda permanente de mejora continua <br>
                        * Honestidad, responsabilidad, proactividad <br>
                    </p>
                </div>
            </div>
        </div>
        <div class="text-machine col-md-6 d-flex justify-content-center align-items-center">
            <div class="txt-machine p-3">
                <h2> Edgardo D. Cometto </h2>
                <h4>
                    <span class="typedText"></span>
                </h4>
            </div>
        </div>
    </div>

</div>

<!-- Script para tiping -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed('.typedText', {
        strings: ['Desarrollo de páginas WEB', 'Programación aplicaciones', 'Desarrollo de sistemas informáticos'],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        loop: true
    });
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agencia de Viajes</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0d7f7786ce.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!--menu-->

    <?php
        include 'contenedor/menu.html'
    ?>
    <!--final-menu-->
    
    <!--carrusel-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/viaje4.jpg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/viaje1.jpg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/viaje2.jpg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/viaje3.jpg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/viaje5.jpg" class="d-block w-100">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div class="container-fluid ">
        <div class="row plan"> 
            <div class="col-md-4">
                <img src="img/mundo3.png" alt="">
                <h2>Busca</h2>
                <p class="par" data-aos="fade-left" >En mas de 1.200.000 hoteles, departamento y hostales.</p>
            </div>
            <div class="col-md-4">
                <img src="img/precio.png" alt="">
                <h2>Compara</h2>
                <p class="par">Por precio, ubicacion, calificacion y mas.</p>
                
            </div>
            <div class="col-md-4">
                <img src="img/ahorro.png" alt="">
                <h2>y ahorra</h2>
                <p class="par">Encontrando el mejor precio por el hotel ideal</p>
            </div>
        </div>
    </div>

    <!--photo de 3-->

    <div class="container-fuid photo"  >
        <div class="row">
            <div class="col-md-3 sombra" >

                <div class="card">
                    <img src="img/card3.jpg" class="card-img-top img-fluid "  alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rio de Janeiro</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Brasil</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sombra">

                <div class="card">
                    <img src="img/card1.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cancun</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Mexico</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sombra">
                <div class="card">
                    <img src="img/card2.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Varadero</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Cuba</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid photo">
        <div class="row">
            <div class="col-md-3 sombra">
                <div class="card">
                    <img src="img/card5.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nueva Yook</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary ">Estados Unidos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sombra">
                <div class="card">
                    <img src="img/card4.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Paris</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Francia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sombra ">
                <div class="card">
                    <img src="img/card6.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Buenos Aires</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Argentina</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid photo">
        <div class="row">
            <div class="col-md-3 sombra">
                <div class="card">
                    <img src="img/card7.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Machu Picchu</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary ">Peru</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sombra">
                <div class="card">
                    <img src="img/card8.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bariloche</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Argentina</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sombra ">
                <div class="card">
                    <img src="img/card9.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cartagena</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Colombia</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
<!--foother o pie de pagina-->
<?php
        include 'contenedor/foother.html'
    ?>
<!--final--foother o pie de pagina-->

<!--java-script-->
<?php
        include 'contenedor/java.html'
    ?>
<!--final java-script-->
<
</body>

</html>

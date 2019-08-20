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

</head>

<body>
<!--menu-->
    <?php
     include 'contenedor/menu.html'
    ?>
    <!--final-menu-->
    
    <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text tserv">Servicios</p>
          <p class="tserv1">Para satisfacer las necesidades de los clientes, proponemos viajar de una manera diferente, donde los intereses y gustos sean los que determinen la elección de las actividades y recorridos. Ofreciendo una gama de servicios de la más alta calidad en el mercado.</p>
        </div>
      </div>
      <div class="container sp">
          <div class="row">
              <div class="col-md-4">
                <i class="fas fa-plane-departure fafa"></i>
                <p class="serv">Pasajes aéreos y terrestres Nacionales e Internacionales de todas las compañías en general.</p>
              </div>
              <div class="col-md-4">
                    <i class="fas fa-bed fafa"></i>
                    <p class="serv">Reservas de Hoteles en el país y resto del mundo.</p>
              </div> 
              <div class="col-md-4">
                    <i class="fas fa-car fafa"></i>
                    <p class="serv">Reservas de autos con las principales rentadoras nacionales e internacionales.</p>
                </div>
          </div>
      </div>
      <div class="container sp">
          <div class="row">
              <div class="col-md-4">
                    <i class="fas fa-heartbeat fafa"></i>
                    <p class="serv">Luna de Miel paquetes sugeridos en destinos exóticos o a medida de cada cliente.</p>
              </div>
              <div class="col-md-4">
                    <i class="fas fa-train fafa"></i>
                    <p class="serv">Servicios terrestres, excursiones y paquetes turísticos en los principales destinos del país y el extranjero.</p>
                </div>
                <div class="col-md-4">
                        <i class="fas fa-ambulance fafa"></i>
                    <p class="serv">Seguro y Asistencia médica integral al viajero para viajes nacionales e internacionales.</p>
                    </div >
          </div>
      </div>
<div class="container sp">
    <div class="row">
        <div class="col-md-4">
                <i class="fas fa-bus fafa"></i>
                <p class="serv">Alquiler de aviones y ómnibus de lujo para viajes locales o internacionales.</p>
        </div>
        <div class="col-md-4">
                <i class="fas fa-ship fafa"></i>
                <p class="serv">Cruceros operados por las más importantes líneas del mundo.</p>
        </div>
        <div class="col-md-4">
                <i class="far fa-thumbs-up fafa"></i>
                <p class="serv">Asesoramiento en la tramitación de documentos y tramitación de Visas.</p>
        </div>
    </div> 
</div>
<div class="container-fuid sp">
    <div class="row">
        <div class="col-md-12">
                <i class="fas fa-tags fafa"></i>
                <p class="serv1">Envío de boletos en propias manos a domicilio particular u oficina del cliente.</p>
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
</body>

</html>

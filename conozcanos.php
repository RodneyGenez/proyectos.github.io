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
<body>
    <!--menu-->

    <?php
 include 'contenedor/menu.html'
?>

    <!--final-menu-->
    

    <div class="card text-center">
        <div class="card-header">
        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text cont"><h2>CONOZCANOS</h2></p>
           </div>
      </div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
         <p>   <br><br> <h3 class="">Misión</h3>
                Somos Operadores Mayoristas de Viajes y Turismo enfocados al TURISMO VACACIONAL. Nos comprometemos con viaje de nuestros clientes, le convertimos su sueño en realidad. Hacemos de que el cliente “se sienta de viajando” desde el momento que empieza a planificar sus vacaciones hasta su regreso. Nos dedicamos al turismo emisivo, llevando desde hace 20 años, pasajeros a USA, Disney, Miami, Cancún, Riviera Maya, Cuba: La Habana y Varadero, Punta Cana, Colombia está de moda, Cuzco, Lima, Machu Picchu. Somos representantes de SURLAND para circuitos por Europa y POLITOURS para Grandes Viajes. Nuestra cartera de productos aéreo terrestre, es nuestra mejor marca.
                <br>
                <h4> Visión</h4>
                Queremos llegar a todos los niveles, que cada persona ejerza por medio nuestro, el derecho que le corresponde a ser feliz viajando. En el futuro queremos abarcar cada rincón. Que en cada ciudad, por pequeña que sea, haya una agencia minorista con nuestra oferta.
                <br>
                               
                <h4>Filosofía de La Empresa</h4> 
                Mejor equilibrio posible en calidad y cantidad. <br>
                Para nosotros, el pasajero es lo mas importante. <br>
                No hay competencia chica, todas son importantes, no hay competencia grande, todo es alcanzable. <br>
                Somos desarrolladores de destinos. <br>
                Nos gusta innovar. <br>
                Tenemos el producto adecuado para cada pasajero. <br>
                La mejor empresa de viajes es la que mejor <strong>RESUELVE</strong>  los problemas.</p>
        </div>
     
        <div class="col-md-6  ">
            <h3 class="marg">Integrantes de nuestra empresa</h3>
            <img src="img/fotogrupal.jpg" class="card1"  id="animado">
        </div>        
    </div>
</div>
<div class="container  marg ">
       <p class="marg"><h2>STAFF</h2></p>
    <div class="row">
        <div class="col-md-4">
                <div class="card card1  " style="width: 18rem;" >
                        <img src="img/staff.jpg" class="card-img-top card1"  alt="...">
                        <div class="card-body ">
                          <p class="card-text  "><h3>Asesor</h3></p>
                          <p>nombre del asesor</p>
                          <p>correo@dominio.com.py</p>
                        </div>
                      </div>
        </div>
        <div class="col-md-4">
             
                <div class="card card1" style="width: 18rem;">
                        <img src="img/staff.jpg" class="card-img-top card1" alt="...">
                        <div class="card-body ">
                          <p class="card-text  "><h3>Asesor</h3></p>
                          <p>nombre del asesor</p>
                          <p>correo@dominio.com.py</p>
                        </div>
                      </div>    
            </div>
            <div class="col-md-4">
              
                <div class="card card1" style="width: 18rem;" >
                        <img src="img/staff.jpg" class="card-img-top card1" alt="...">
                        <div class="card-body ">
                          <p class="card-text  "><h3>Gerente General</h3></p>
                          <p>nombre del gerente</p>
                          <p>correo@dominio.com.py</p>
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

</body>

<script>
    window.addEventListener('scroll', function(){
        let animacion =this.document.getElementById('animado');
        let posicionObj1 = animacion.getBoundingClientRect().top;
        console.log(posicionObj1);
        let tamañoDePantalla = window.innerHeight/3.5;

        if (posicionObj1 < tamañoDePantalla){
                animacion.style.animation = 'mover 1s ease-out'
        }

    })

  
</script>
</html>

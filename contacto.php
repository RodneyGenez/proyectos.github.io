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
        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text cont"><h2>CONTACTO</h2></p>
           </div>
      </div>
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    
                    <p><h3>ENCUENTRENOS AQUI</h3></p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.5713617668175!2d-57.5655352848267!3d-25.285000783855363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da61555555555%3A0x78d26ef57f8116a1!2sPaseo+La+Galer%C3%ADa!5e0!3m2!1ses-419!2spy!4v1565718443111!5m2!1ses-419!2spy" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            
                </div>


                <div class="col-md-6">
                    <div class="container">
                        <form id="contact" action="" method="post">
                            <h3 class="con">¡CONTACTÁ CON NOSOTROS!</h3>
                                     <form method="post" action="mailto:ami@ami.com.py">
                                    <div>
                                        <span><label class="form">Nombre</label></span> <br>
                                        <span><input class="py" name="userName" type="text" class="textbox"></span>
                                    </div>
                                    <div>
                                        <span><label class="form">E-mail</label></span> <br>
                                        <span><input class="py" name="userEmail" type="text" class="textbox"></span>
                                    </div>
                                    <div>
                                         <span><label class="form">Telef</label></span> <br>
                                        <span><input class="py" name="userPhone" type="text" class="textbox"></span>
                                    </div>
                                    <div>
                                        <span><label class="form ">Asunto</label></span> <br>
                                        <span><textarea class="py st" name="userMsg"> </textarea></span>
                                    </div>
                                   <div>
                                           <span><input type="submit" class="mybutton" value="Enviar"></span>
                                  </div>
                                </form>
                        </form>
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

</html>

<?php
session_start();
?>
<div class="col-sm-6 wow fadeInLeftBig">
  <div id="owl-demo-1" class="owl-carousel">
      <div class="item">
        <img  class="img-responsive img-rounded" src="img/src/practica/ts2.png" alt="">
      </div>
      <div class="item">
        <img  class="img-responsive img-rounded" src="img/src/practica/ts3.png" alt="">
      </div>
  </div>       
</div>
<div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
  <h3 class="section-heading">Desarrollo de aplicaciones</h3>
  <div class="sub-title lead3">Expresar la creatividad a través de la programación.</div>
    <p class="lead">
      Ingeneros de software han creado aplicaciones online que permiten el desarrollo de nuevas aplicaciones, principalmente para funcionar en Web y Móbil.<br><br>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      Como docente, motive a sus estudiantes a desarrollar sus propias aplicaciones móviles de forma interactiva, que dediquen parte de su tiempo a ampliar sus capacidades en programación a través de la transformación de una idea en algo funcional. Sembremos en ellos que ¡De una idea nace un proyecto!<br>
    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      Como estudiante que está adentrándose cada vez más en el área de la programación, incrementa tus capacidades a través de la creación de tus propias aplicaciones móviles de forma interactiva. Si tienes una idea, piensa que puedes verla de forma funcional. Recuerda ¡De una idea nace un proyecto!<br>
    <?php } ?>
    </p>
    <div class="dl-horizontal">
    <a class="btn btn-warning btn-arrow-left options spaceright linksrc" href="#test" data="html/practica/test.php" role="carrusel"> Volver</a>
      <a href="#test" class="btn btn-success linksrc" data="html/practica/appinventor.php">App Inventor</a>
    </div>
    
</div>

<script type="text/javascript">
  /*$("#owl-demo-2").owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
    });*/
</script>

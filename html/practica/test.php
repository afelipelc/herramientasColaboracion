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
  <h3 class="section-heading">¡De una idea nace un proyecto!</h3>
  <div class="sub-title lead3">Cualquier persona con poca experiencia en programación puede empezar a crear aplicaciones.</div>
    <h4>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      ¿El alumno tiene conocimiento sobre programación?
    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      ¿Tienes conocimiento en programación y haz pensado crear tus propias aplicaciones?
    <?php } ?>
    </h4>
    <p><a class="btn btn-embossed btn-success linksrc" href="#test" data="html/practica/recursos.php" role="carrusel"> &nbsp;&nbsp;Si &nbsp;&nbsp; </a> 
    <a class="btn btn-embossed btn-warning linksc" href="#basic" role="button"> &nbsp; No <?php echo $_SESSION["role"] == "docente" ? "tiene" : "tengo"; ?> conocimiento &nbsp;</a></p>
    <div class="infoic"><a href="#planning" class="linksrc" role="button" alt="Continuar el recorrido por el manual">Siguiente paso: <strong><u>Desarrolla un proyecto de forma colaborativa.</u></strong></a></div>
</div> 

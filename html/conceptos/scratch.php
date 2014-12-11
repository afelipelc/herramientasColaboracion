<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
<br><br><br><br>
  <iframe src="//player.vimeo.com/video/65583694?title=0&amp;byline=0&amp;portrait=0" width="495" height="310" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading"><a href="http://scratch.mit.edu/" target="_blank">Scratch</a></h3>
  <div class="sub-title lead3">"Crea historias, juegos, animaciones, arte, simulaciones y más. Comparte con otros al rededor del mundo." Scratch</div>
    <p class="lead">
      Con Scratch puede aprenderse a programar de forma interactiva, está pensado para ayudar a los principiantes en el fascinante mundo del desarrollo de software, principalmente porque emplea una amplia gama de elementos que se encuentran en un lenguaje de programación real. Otra de sus características es que la colaboración entre estudiantes se hace más enriquecida para crear soluciones.
      <br>
      Scratch es una herramienta gratuita como proyecto del grupo Lifelong Kindergarten en el Media Lab del MIT.
    </p>
</div>
</div>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
    <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://scratch.mit.edu/" target="_blank">Ir a Scratch.mit.edu</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#basic" data="html/conceptos/iniciarscratch.php" role="carruselscratch">Primeros pasos con Scratch</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadesscratch.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajescratch.php">¿Qué aprende con Scrach?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadesscratch.php">¿Qué puedo hacer?</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajescratch.php">¿Qué aprendo con Scrach?</a>
     <?php } ?>
    </div>
  </div>
</div>
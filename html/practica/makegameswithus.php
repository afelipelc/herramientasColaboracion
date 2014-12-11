<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/conceptos/code1.png" alt="">
</div>

<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading"><a href="http://www.makegameswith.us/build-an-iphone-game-in-your-browser/" target="_blank">MakeSchool</a></h3>
  <div class="sub-title lead3">"Programming is the first real superpower and you are going to be a superhero!" MakeSchool</div>
    <p class="lead">
      MakeSchool además de permitir el desarrollo de aplicaciones para iOS desde el navegador web, induce al estudiante a familiarizarse aún más con un lenguaje de programación y aplicar los conceptos aprendidos.
    </p>
</div>
</div>

<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
  <br><br>
    <div>
      <a class="btn btn-default btn-arrow-right" href="http://code.org/" target="_blank">Ir a Code.org</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#basic" data="html/conceptos/iniciarcode.php">Primeros en Code Studio</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividades.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizaje.php">¿Qué aprende con Code Studio?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividades.php">¿Qué puedes hacer en Code.org?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizaje.php">¿Qué aprendo con Code Studio?</a>
     <?php } ?>
    </div>
    <a class="btn btn-info btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="carrusel"> Volver a Recursos </a>
  </div>
</div>

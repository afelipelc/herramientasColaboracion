<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/conceptos/code1.png" alt="">
</div>

<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading"><a href="http://studio.code.org/" target="_blank">Code Studio</a></h3>
  <div class="sub-title lead3">"Cada alumno de cada escuela debería tener la oportunidad de aprender ciencias de la computación." Code.org</div>
    <p class="lead">
      Ingenieros de Google, Microsoft, Facebook y Twitter han ayudado a crear tutoriales interactivos para aprender los fundamentos de la programación.
    </p>
</div>
</div>

<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
  <br><br>
    <div>
    <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
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
  </div>
</div>

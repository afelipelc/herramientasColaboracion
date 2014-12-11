<?php
session_start();
?>
<div class="row">
<div class="col-sm-5 pull-right wow fadeInRightBig">
<br><br><br><br>
  <img class="img-responsive " src="img/src/codificacion/gitlc.png" alt="">
  <div class="sub-title lead3">Ramificación en el desarrollo de software.</div>
</div>

<div class="col-sm-7 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading"><a href="http://git-scm.com/" target="_blank">Git</a></h3>
  <div class="sub-title lead3">"Git es un Sitema de Control de Versiones Distribuidas -DCVS- para administrar desde pequeños hasta grandes proyectos de forma rápida y eficiente" (git-scm.com).</div>
    <p class="lead">
      ...
      <ul>
        <li>....</li>
      </ul>
      <br>
      <a class="btn btn-primary btn-arrow-right" href="http://try.github.com/" target="_blank">Aprende a usar Git</a>
    </p>
</div>
</div>

<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
  <br>
    <div>
      <a class="btn btn-warning btn-arrow-left spaceright linksrc options" href="#coding" data="html/codificacion/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://git-scm.com/" target="_blank">Visitar el sitio de Git</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-info btn-arrow-right linksrc" href="#coding" data="html/codificacion/github.php">Usar Git en un proyecto</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
        <a class="btn btn-info btn-arrow-right linksrc" href="#coding" data="html/codificacion/github.php">Utiliza Git en un proyecto</a>
     <?php } ?>
    </div>
  </div>
</div>

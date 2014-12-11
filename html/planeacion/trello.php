<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <br><br>
  <img class="img-responsive " src="img/src/planeacion/trello.png" alt="">
</div>

<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading"><a href="http://trello.com/" target="_blank">Trello</a></h3>
  <div class="sub-title lead3">Herramienta de colaboración para organizar proyectos e ideas en tableros.</div>
  <p class="lead">
    Trello es una herramienta de colaboración útil para cualquier proyecto, se utiliza para organizar las ideas, tareas, comunicacíón, es decir, todo lo que dará forma a un nuevo producto o entregable organizado en un sólo lugar.
  </p>
</div>
</div>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
  <br>
    <div>
      <a class="btn btn-default btn-arrow-right" href="http://trello.com/" target="_blank">Ir a Trello.com</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#planning" data="html/planeacion/conocertl.php">Conocer Trello</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#planning" data="html/planeacion/actividadestw.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#planning" data="html/planeacion/beneficiostw.php">¿En qué contribuye?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#planning" data="html/planeacion/actividadestw.php">¿Para qué puedo utilizar Trello?</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#planning" data="html/planeacion/beneficiostw.php">¿En qué me beneficia Trello?</a>
     <?php } ?>
    </div>
    <a class="btn btn-info btn-arrow-left linksrc options" href="#planning" data="html/planeacion/adminproyectos.php" role="button"> Volver a Recursos </a>
  </div>
</div>
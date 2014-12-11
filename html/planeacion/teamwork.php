<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <br><br>
  <img class="img-responsive " src="img/src/planeacion/tw.png" alt="">
</div>

<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading"><a href="http://teamwork.com/" target="_blank">TeamWork</a></h3>
  <div class="sub-title lead3">Un espacio de trabajo colaborativo basado en proyectos.</div>
  <p class="lead">
    La administración de proyectos se basa en una metodología que involucra aspectos como la comunicación entre el equipo y el cliente, calendario de actividades, informes del progreso de las actividades, asignación de tareas, repositorio de archivos, entre otros factores.
    <br>
    TeamWork es una de las aplicaciones Web 2.0 pensada y desarrollada para utilizarse por los equipos de trabajo en diversos proyectos.
    <br>
    Por sus características, se recomienda como recurso de soporte en el desarrollo de proyectos de software.<br><br>
    <strong>Limitaciones:</strong> El plan gratuito es de características limitadas.
  </p>
</div>
</div>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
    <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#planning" data="html/planeacion/adminproyectos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://teamwork.com/" target="_blank">Ir a TeamWork.com</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#planning" data="html/planeacion/conocertw.php" role="carrusel">Conocer TeamWork</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#planning" data="html/planeacion/actividadestw.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#planning" data="html/planeacion/beneficiostw.php">¿Qué beneficios se obtienen?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#planning" data="html/planeacion/actividadestw.php">¿Qué uso puedo hacer de TeamWork?</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#planning" data="html/planeacion/beneficiostw.php">¿En qué me beneficia TeamWork?</a>
     <?php } ?>
    </div>
  </div>
</div>
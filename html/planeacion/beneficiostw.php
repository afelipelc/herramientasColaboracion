<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/planeacion/tw001.png" alt="">
  <br><br>
  <blockquote>
    <p>La conectividad ha permitido trasladarnos a entornos virtuales en los cuales realizar las actividades cotidianas y limitar las barreras el tiempo y el espacio.</p>
  </blockquote>
</div>
<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading">Beneficios de utilizar TeamWork</h3>
  <p class="lead">
    En la adminstración de proyectos siembre se emplea software como apoyo, principalmente para la planificación de actividades como Microsoft Project y OpenProj, además la documentación producida requiere mantenerse al alcance, y así mismo manterner la comunicación con el equipo y demás consideraciones que den lugar en este proceso.<br>
    Por lo tanto TeamViewer como plataforma de administración, el equipo de trabajo podrá:
    <ul>
      <li>Estar al tanto de su proyecto</li>
      <li>Acceder a los recursos del proyecto</li>
      <li>Mantenerse comunicado e informado</li>
      <li>Proyectar el progreso y alcance obtenido</li>
      <li>Hacer mejoras de forma más efectiva</li>
      <li>Facilita la administración de un proyecto contribuyendo al alcance de los objetivos.</li>
      </li>
    </ul>
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
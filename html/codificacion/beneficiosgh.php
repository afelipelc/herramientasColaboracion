<?php
session_start();
?>
<div class="row">
<div class="col-sm-5 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/codificacion/ghtw.png" alt="">
  <br><br>
  <blockquote>
    <p>Los centros de repositorios benefician a los desarrolladores de software permitiendo la construcción de forma más ágil, organizada y controlada del código fuente de una aplicación.</p>
  </blockquote>
</div>
<div class="col-sm-7 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading">Beneficios de utilizar GitHub</h3>
  <p class="lead">
    El beneficio principal es el trabajo colaborativo más eficiente, posteriormente porque es fácil de utilizar y los desarrolladores lo han adoptado como una de los mejores centros de repositorios en el mundo, sin embargo, los beneficios identificados son:
    <ul>
      <li>Mantener organizado el código</li>
      <li>Controlar las versiones del código</li>
      <li>Pueden revertirse cambios</li>
      <li>Cada miembro puede centrarse en el desarrollo de un requerimiento</li>
      <li>Se pueden delegar tareas</li>
      <li>Puede utilizarse como centro de distribución</li>
      <li>El código está al alcance todo el tiempo</li>
      <li>Facilita la codificación de una aplicación en equipo.</li>
      </li>
    </ul>
  </p>
  <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#coding" data="html/codificacion/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#coding" data="html/codificacion/iniciargh.php" role="carrusel">Cómo usar GitHub</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#coding" data="html/codificacion/actividadesgh.php">Actividades para el alumno</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#coding" data="html/codificacion/actividadesgh.php">¿Qué hacer en GitHub?</a>
     <?php } ?>
    </div>
</div>
</div>
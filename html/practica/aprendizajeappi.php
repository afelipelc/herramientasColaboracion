<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/practica/api12.png" alt="">
  <br><br>
  <blockquote>
    <p>App Inventor como herramienta de desarrollo para aplicaciones móviles proporciona un acercamiento de los estudiantes hacia un entorno de desarrollo de software.</p>
  </blockquote>
</div>
<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading">¿Qué se aprende con App Inventor?</h3>
  <p class="lead">
    App Inventor a través de su entorno gráfico y entorno por bloques permite la puesta en marca de los conocimientos de los estudiante acerca de los conceptos que ya han adquirido, esto asimila un entorno de desarrollo de software que se emplea en lenguajes de programación:
    <ul>
      <li>Desarrollar un proyecto</li>
      <li>Ejecutar una aplicación en el móvil</li>
      <li>Diseñar interfaces de usuario</li>
      <li>Programar los controles de la aplicación</li>
      <li>Exportar una aplicación hacia otros móviles</li>
      <li>Emplear los conceptos de programación fundamentales</li>
    </ul>
  </p>
</div>
</div>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
  <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#test" data="html/practica/recursos.php" role="carrusel"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://ai2.appinventor.mit.edu/" target="_blank">App Inventor v2</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#test" data="html/practica/iniciarappi.php" role="carruselpasos">Primeros pasos en App Inventor</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#test" data="html/practica/actividadesappi.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#test" data="html/practica/aprendizajeappi.php">¿Qué aprende con App Inventor?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#test" data="html/practica/actividadesappi.php">¿Qué puedes hacer en App Inventor?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#test" data="html/practica/aprendizajeappi.php">¿Qué aprendo con App Inventor?</a>
     <?php } ?>
    </div>
  </div>
</div>
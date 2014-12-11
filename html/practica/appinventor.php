<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/practica/api0.png" alt="">
</div>

<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading"><a href="http://appinventor.mit.edu/" target="_blank">MIT App Inventor</a></h3>
  <div class="sub-title lead3">"App inventor en una aplicación en la nube que permite construir aplicaciones para Android en el navegador web."</div>
    <p class="lead">
      MIT App Inventor es una herramienta de programación basada en bloques que además de aportar al desarrollo del conocimiento en programación, el estudiante desarrolla sus propias aplicaciones para el sistema operativo móvil Android.
      Esta herramienta facilita el desarrollo de aplicaciones complejas en poco tiempo, App Inventor es utilizada dentro del equipo de Google Education y es administrado por MIT’s Center for Mobile Learning.
      <br>Leer más en <a href="http://appinventor.mit.edu/" class="link" target="_blank">Appinventor.mit.edu</a>
    </p>
</div>
</div>

<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
  <br><br>
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

<?php
session_start();
?>
<div class="row">
<div class="col-sm-5 pull-right wow fadeInRightBig">
<br><br><br><br>
  <img class="img-responsive " src="img/src/codificacion/gh.png" alt="">
  <div class="sub-title lead3">Sito web de GitHub.com</div>
</div>

<div class="col-sm-7 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading"><a href="http://github.com/" target="_blank">GitHub</a></h3>
  <div class="sub-title lead3">"GitHub es un espacio para compartir código con amigos, compañeros de trabajo, compañeros de clase"</div>
    <p class="lead">
      GitHub es el espacio para compartir código más utilizado del mundo con más de 16 millones de repositorios ofreciendo características como:
      <ul>
        <li>Seguimiento de problemas y soluciones.</li>
        <li>Revisión y comparación de código colaborativo.</li>
        <li>Administración de los equipos dentro de las organizaciones.</li>
        <li>Introducción de texto simplificado con reconocimiento de características de GitHub.</li>
        <li>Resaltado de sintaxis de código.</li>
        <li>Aplicación cliente para escritorio y móvil.</li>
      </ul>
      <br>Leer más en <a href="https://github.com/about" class="link" target="_blank"><strong>Acerca de GitHub</strong></a>
    </p>
</div>
</div>

<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
  <br>
    <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#coding" data="html/codificacion/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="https://github.com/" target="_blank">Ir a GitHub</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#coding" data="html/codificacion/iniciargh.php" role="carrusel">Cómo usar GitHub</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#coding" data="html/codificacion/actividadesgh.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#coding" data="html/codificacion/beneficiosgh.php">Beneficios de usar GitHub</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#coding" data="html/codificacion/actividadesgh.php">¿Qué hacer en GitHub?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#coding" data="html/codificacion/beneficiosgh.php">Beneficios de usar GitHub</a>
     <?php } ?>
    </div>
  </div>
</div>

<?php
session_start();
?>
<div class="row">
  <h3 class="section-heading">Actividad en GitHub</h3>
  <div class="col-sm-4 pull-right wow fadeInRightBig"  data-animation-delay="200">   
    <img class="img-responsive center" src="img/src/codificacion/ghw.png" alt="">
    <div class="sub-title lead3">GitHub como centro de repositorios de proyectos de software.</div>
    <?php
      if ($_SESSION["role"] == "docente"){
        ?>
        <blockquote>
            <p class="text-info">Fomente entre los estudiantes la cultura del trabajo colaborativo, muéstreles que se puede codificar en equipo y no necesariamente en la misma computadora. Qué se involucren de forma activa en la programación para que esté preparados como profesionistas competentes.
          </p>
          </blockquote>
      <?php } elseif ($_SESSION["role"] == "alumno") {
       ?>
       <blockquote>
            <p class="text-info">Desarrolla en tí mismo la cultura del trabajo colaborativo, experimenta que se puede codificar en equipo y no necesariamente en la misma computadora. Involúcrate de forma activa en la programación para que estés preparado como profesionista competente.</i>
          </p></blockquote>
       <?php } ?>
  </div>
  <div class="col-sm-8 wow fadeInLeftBig"  data-animation-delay="200">   
    <?php
      if ($_SESSION["role"] == "docente"){
        ?><br>
        <h5>Organice a los estudiantes para que de forma individual para:</h5>
          
    <?php } elseif ($_SESSION["role"] == "alumno") {
       ?>
       <br>
        <p>Comprométete con tu equipo, puedes empezar por:</p>
      <?php } ?>
          <?php Proyecto(); ?>
          
  </div>
</div>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
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
<?php
function Proyecto()
{
  ?>
  <ul>
    <li>Crear su cuenta en <a href="https://github.com/" target="_blank"><u>https://github.com/</u></a></li>
    <li>Explorar el sitio de GitHub</li>
    <li>Explorar <a href="https://help.github.com/" target="_blank"><u>la ayuda</u></a> para conocer más sobre la herramienta.</li>
  </ul>
  <h5>Realicen una práctica</h5>
  <ul>
    <li>Crear un repositorio
    <p>Suban el código fuente de algún proyecto existente</p></li>
    <li>Obtener o clonar el contenido de un repositorio -con clone-</li>
    <li>Agreguen por lo menos uno o dos colaboradores:
    <p>Que los miembros obtengan una copia del repositorio.</p></li>
    <li>Crear ramas:
    <p>Que cada integrante cree su propia rama por ejemplo: rama1, rama2, rama3</p></li>
    <li>Crear o modificar archivos:<p>Que cada integrante trabaje con su rama y agregue nuevos archivos o modifique alguno existente con nuevas características</p></li>
      <li>Que cada integrante practique la subida de cambios a su propia rama.</li>
      <li>Que juntos analicen la comparación que hace GitHub de las ramas y su contenido.</li>
      <li>Que juntos fusionen las ramas -rama 1, 2 y 3- con la principal.</li>
      <li>Que cada uno actualice su copia local con el repositorio -pull-.</li>
      <li>Que todo el equipo verifique que tiene el mismo contenido sincronizado.</li>
    <ul>
  <?php
}
?>
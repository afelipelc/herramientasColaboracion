<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/conceptos/code5.png" alt="">
  <br><br>
  <blockquote>
    <p>El aprendizaje de estos conceptos básicos permitirá al alumno llegar a escribir código con instrucciones complejas que pueda ver funcionando en un sistema computacional.</p>
  </blockquote>
</div>
<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading">¿Qué se aprende con Code Studio?</h3>
  <p class="lead">
    Code Studio proporciona un acercamiento a la programación a través de bloques con los cuales se aprende principalmente:
    <ul>
      <li>Elaborar un programa</li>
      <li>Ejecutar un programa</li>
      <li>Depurar un programa</li>
      <li>Corregir un programa</li>
      <li>Ordenar instrucciones</li>
      <li>Utilizar estructuras repetitivas
        <ul>
          <li><b>Repetir</b>: un determinado número de veces las mismas acciones.</li>
          <li><b>Repetir hasta</b>: que se cumpla o se alcance un objetivo.</li>
        </ul>
      </li>
      <li>Utilizar estructuras de toma de desiciones
        <ul>
          <li><b>Si Entonces</b>: Si se cumple una condición, entonces hacer algo.</li>
          <li><b>Si Entonces Sino </b>: Si se cumple una condición, entonces hacer algo y Si no se cumple entonces hacer otra cosa.</li>
        </ul>
      </li>
    </ul>
  </p>
</div>
</div>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
  <div>
  <?php
    if ($_SESSION["role"] == "docente"){
      ?>

      <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://code.org/" target="_blank">Ir a Code.org</a>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividades.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizaje.php">¿Qué aprende con Code Studio?</a>
    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
     <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
        <a class="btn btn-default btn-arrow-right" href="http://code.org/" target="_blank">Ir a Code.org</a>
        <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividades.php">¿Qué puedes hacer en Code.org?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizaje.php">¿Qué aprendo con Code Studio?</a>
  <?php } ?>
  </div>
</div>
</div>
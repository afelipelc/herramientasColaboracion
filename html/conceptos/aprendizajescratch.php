<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/conceptos/sc10a.png" alt="">
  <br><br>
    <blockquote>
    <p>El aprendizaje por medio de Scratch permite al alumno llegar a escribir código con instrucciones complejas que pueda ver funcionando en un sistema computacional.</p>
  </blockquote>
</div>
<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading">¿Qué se aprende con Scratch?</h3>
  <p class="lead">
    Scratch proporciona a través de bloques los elementos más importante en la programación así como una serie de características con las que se facilita hacia el estudiante aprender a:
    <ul>
      <li>Crear un programa, animacíon o un juego</li>
      <li>Ejecutar un programa</li>
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
      <li>Emplear los diferentes operadores:
        <ul>
          <li>Aritméticos: / * + - ^ % div</li>
          <li>Relacionales: <  >  = >=  <=  != </li>
          <li>Lógicos: No Y  O</li>
        </ul>
      </li>
      <li>Manejar eventos del teclado y ratón.</li>
      <li>Interactividad entre objetos.</li>
    </ul>
  </p>
  
</div>
</div>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
    <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://scratch.mit.edu/" target="_blank">Ir a Scratch.mit.edu</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#basic" data="html/conceptos/iniciarscratch.php" role="carruselscratch">Primeros pasos con Scratch</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadesscratch.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajescratch.php">¿Qué aprende con Scrach?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadesscratch.php">¿Qué puedo hacer?</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajescratch.php">¿Qué aprendo con Scrach?</a>
     <?php } ?>
    </div>
</div>
</div>
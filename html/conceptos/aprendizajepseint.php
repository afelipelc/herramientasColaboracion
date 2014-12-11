<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/conceptos/ps11.png" alt="">
  <br><br>
  <blockquote>
    <p>Con PSeInt el estudiante podrá familiarizarse más con la programación, pero es recomendable que aprenda a realizar los primos algoritmos tanto en PSeInt, Scratch, representarlos en DFD y posteriormente traducirlos a cualquier lenguaje de programación.</p>
  </blockquote>
</div>
<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading">¿Qué se aprende con PSeInt?</h3>
  <p class="lead">
    PSeInt proporciona a través de comandos y ayuda un acercamiento más importante a un lenguaje de programación ya que el estudiante aprede a escribir código fuente de algoritmos sencillos hasta algoritmos complejos, entre todo ello aprende a:
    <ul>
      <li>Crear un algoritmo completo</li>
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
      <li>Declarar y utilizar variables con tipos de datos primitivos:
      <ul>
        <li>Entero</li>
        <li>Cadena y Carácter</li>
        <li>Real</li>
        <li>Lógico o Booleano</li>
      </ul>
      </li>
    </ul>
  </p>
</div>
</div>

<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
<div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://pseint.sourceforge.net/index.php?page=descargas.php" target="_blank">Obtener PSeInt</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#basic" data="html/conceptos/iniciarpseint.php" role="carruselpseint">Primeros pasos con PSeInt</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadespseint.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajepseint.php">¿Qué aprende con PSeInt?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadespseint.php">¿Qué puedo hacer?</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajepseint.php">¿Qué aprendo con PSeInt?</a>
     <?php } ?>
    </div>
  </div>
</div>
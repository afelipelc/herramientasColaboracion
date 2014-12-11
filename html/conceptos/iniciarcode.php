<?php
session_start();
?>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">   
    <h3 class="section-heading">Primeros pasos con la Hora del Código en Code Studio</h3>
    <div class="row">
      <div class="col-sm-3 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead">Analizar el problema.</p>
        <p>Determinar cuantos movimientos debe realizar el pajarito.</p>
      </div>
      <div class="col-sm-3 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/conceptos/code2.png" alt="">
      </div>
      <div class="col-sm-3 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead">Armar la solución.</p>
        <p>Coloca sólo los bloques necesarios.</p>
      </div>
      <div class="col-sm-3 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/conceptos/code3.png" alt="">
      </div>
    </div>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?><br>
      <blockquote>
        <p>El desarrollo de la lógica empieza por la observación y el análisis, ya que se quiere que el alumno aprenda a resolver problemas a través de algoritmos.<br>
      Code Studio ofrece la facilidad de aprender a través del armado de bloques que puede traducir a código.<br><br>
      Explore las herramientas y tutoriales en <a href="http://code.org/learn" target="_blank"><b>Code.org/learn</b></a>
      </p>
      </blockquote>
      
      <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://code.org/" target="_blank">Ir a Code.org</a>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividades.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizaje.php">¿Qué aprende con Code Studio?</a>
      </div>

    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
     <br>
      <blockquote>
        <p>El desarrollo de la lógica empieza por la observación y el análisis, ya que se quiere que aprendas a resolver problemas a través de algoritmos.<br>
        Code Studio ofrece la facilidad de aprender código a través del armado de bloques que puede traducirse a código.<br>
        Mientras realizas los cursos, es importante que <b>leas</b> cuidadosamente los mensajes que van apareciendo, estos te ayudarán a resolver el puzzle-<br><br>
        Explora las herramientas y tutoriales en <a href="http://code.org/learn" target="_blank"><b>Code.org/learn</b></a>
        </p>
      </blockquote>
      <div>
        <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
        <a class="btn btn-default btn-arrow-right" href="http://code.org/" target="_blank">Ir a Code.org</a>
        <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividades.php">¿Qué puedes hacer en Code.org?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizaje.php">¿Qué aprendo con Code Studio?</a>
      </div>
    <?php } ?>
  </div>
</div>
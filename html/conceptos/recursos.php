<?php
session_start();
?>
<div class="col-sm-5 pull-right wow fadeInRightBig"><br>
  <img class="img-responsive " src="img/src/conceptos/basic1.jpg" alt="">
</div>

<div class="col-sm-7 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading">Aprender a programar</h3>
  <div class="sub-title lead3">El aprendizaje de la programación empieza por comprender los conceptos básicos necesarios. ¡Todos podemos aprender a programar!</div>
    <p class="lead">
      A través de Internet se ofrecen variedades de cursos y tutoriales sobre programación en diferentes lenguajes y niveles de conocimiento.<br><br>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      Si se requiere que el alumno empiece a familiarizarse con la ciencia de la computación y en particular con la progración, como docente, puede emplear como recursos didácticos las siguientes herramientas:<br>
    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      Como estudiante interesado en aprender a programar, puedes utilizar herramientas que de forma interactiva te ayuden a familiarizarte con los conceptos, primeras líneas de código, la ejecución y depuración de un programa.<br>
      Algunas de esas herramientas son:
    <?php } ?>
    </p>
    <div class="dl-horizontal">
      <a class="btn btn-warning btn-arrow-left options spaceright linksrc" href="#basic" data="html/conceptos/basic.php" role="button"> Regresar</a>
      <a href="#basic" class="btn btn-info linksrc" data="html/conceptos/codestudio.php">Code Studio</a>
      <a href="#basic" class="btn btn-success linksrc" data="html/conceptos/scratch.php">Scratch</a>
      <a href="#basic" class="btn btn-primary linksrc" data="html/conceptos/pseint.php">PSeInt</a>
      
    </div>
    
</div>
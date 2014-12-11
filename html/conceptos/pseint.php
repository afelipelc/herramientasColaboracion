<?php
session_start();
?>
<div class="row">
<div class="col-sm-6 pull-right wow fadeInRightBig">
  <img class="img-responsive " src="img/src/conceptos/ps1.png" alt="">
</div>

<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading"><a href="http://pseint.sourceforge.net/" target="_blank">PSeInt</a></h3>
  <div class="sub-title lead3">...una invitación a entrar en el maravilloso mundo de la programación...</div>
  <p class="lead">
    PSeInt es una herramienta para asistir a un estudiante en sus primeros pasos en programación. Mediante un simple e intuitivo pseudolenguaje en español (complementado con un editor de diagramas de flujo), le permite centrar su atención en los conceptos fundamentales de la algoritmia computacional, minimizando las dificultades propias de un lenguaje y proporcionando un entorno de trabajo con numerosas ayudas y recursos didácticos. (PSeInt.sourceforge.net)
  </p>
  <br><br>
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
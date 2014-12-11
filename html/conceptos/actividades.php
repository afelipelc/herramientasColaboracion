<?php
session_start();
?>
<div class="row">
  <h3 class="section-heading">Actividades</h3>
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">   
    <img class="img-responsive " src="img/src/conceptos/code4.png" alt="">
  </div>
</div>
<div class="row">
  <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
    <?php
      if ($_SESSION["role"] == "docente"){
        ?><br>
        <h5>Proponga a los estudiantes:</h5>
          <ul>
            <li>Explorar el sitio <a href="http://code.org/" target="_blank"><strong>Code.org</strong></a></li>
            <li>Que realicen <a href="http://studio.code.org/hoc/1" target="_blank"><strong>La hora del código y obtengan su certificado.</strong></a></li>
            <li>Que continúen con los cursos de <a href="http://studio.code.org/" target="_blank"><strong>Studio.Code.org</strong></a></li>
          </ul>
  </div>
  <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200"><br>
          <blockquote>
            <p>Acompañe a los estudiantes mientras resuelven los puzzles, ya que habrá algunos que no logren comprender como solucionar el problema o como organizar correctamente los bloques para utilizar sólo los necesarios.
          </p>
          </blockquote>
      
    <?php } elseif ($_SESSION["role"] == "alumno") {
       ?><br>
        <p>Apreder con Code Studio es muy fácil porque es aprender desde cero, por lo tanto tu mismo puedes:</p>
          <ul>
            <li>Explorar el sitio <a href="http://code.org/" target="_blank"><strong>Code.org</strong></a></li>
            <li>Realizar <a href="http://studio.code.org/hoc/1" target="_blank"><strong>La hora del código y obtener tu certificado.</strong></a></li>
            <li>Completar los cursos de <a href="http://studio.code.org/" target="_blank"><strong>Studio.Code.org</strong></a></li>
          </ul>
  </div>
  <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200"><br>
          <blockquote>
            <p>No está demás solicitar a tu profesor de Metodología de la programación que ayude o explique el funcionamiento de los bloques.<br><br>
            Recuerda <i>¡Si tengo dudas, debo preguntar!</i>
          </p></blockquote>
       <?php } ?>
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
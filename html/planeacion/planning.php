<?php
session_start();
?>
<div class="col-sm-6 pull-right wow fadeInRightBig">
<br><br>
  <img class="img-responsive " src="img/src/planeacion/tw001.png" alt="">
  <div class="sub-title lead3">Concepto de TeamWork.com</div>
  <br><br><br><br><br>
</div>

<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
    <h3 class="section-heading">Proyecto + Equipo colaborativo</h3>
   <h4>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      ¿El equipo colaborativo trabaja en un proyecto y planea alcanzar los objetivos?
    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      ¿Tu equipo colaborativo planea alcanzar los objetivos de un proyecto?
    <?php } ?>
    </h4>
  <ul class="descp lead2">
    <li><a class="btn btn-embossed btn-success linksrc" href="#planning" data="html/planeacion/adminproyectos.php" role="button">Si, el alcance es importante</a>
    <a class="btn btn-embossed btn-warning linksrc" href="#planning" data="html/planeacion/retroalimentacion.php" role="button"> &nbsp; No es prioritario &nbsp;</a></li>
  </ul>

  <div class="infoic"><a href="#coding" class="linksrc" role="button" alt="Continuar el recorrido por el manual">Siguiente paso: <strong><u>Construye código en conjunto.</u></strong></a></div>
</div>   
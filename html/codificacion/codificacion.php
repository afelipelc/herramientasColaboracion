<?php
session_start();
?>
<div class="col-sm-6 pull-right wow fadeInRightBig">
<br><br>
  <img class="img-responsive " src="img/src/codificacion/agiledev.jpg" alt="">
  <div class="sub-title lead3">...</div>
</div>

<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
    <h3 class="section-heading">¡Construyendo en conjunto!</h3>
   <h4>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?> Cuando el equipo codifica una aplicación<br> 
      ¿llevan un control sobre los cambios que van integrando al proyecto?
    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?> Cuando tu equipo codifica una aplicación 
      ¿llevan un control sobre los cambios que van integrando al proyecto?
    <?php } ?>
    </h4>
    <div class="sub-title lead3">Es decir, fragmentan el desarrollo entre los miembros y el código aportado se va integrando al proyecto en un flujo de trabajo centralizado, teniendo así un control sobre las versiones de código que se van generando, esto con apoyo de una herramienta de control de versiones.</div>
  <ul class="descp lead2">
    <li><a class="btn btn-embossed btn-success linksrc" href="#coding" data="html/codificacion/recursos.php" role="button">No, no se usan herramientas para ello</a>
    <a class="btn btn-embossed btn-warning linksrc" href="#coding" data="html/codificacion/retroalimentacion.php" role="button"> Si, el equipo usa software para ello</a></li>
  </ul>

  <div class="infoic"><a href="#credits" class="linksrc" role="button" alt="Continuar el recorrido por el manual">Por último: <strong><u>Conoce al equipo de este trabajo.</u></strong></a></div>
</div>   
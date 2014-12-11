<?php
session_start();
/*
* Es la primera sección que se carga, por ello debe identificarse el rol elegido
* para registrarse en la sesión que en cada sección se comprueba para determinar que se muestra
*/
if(isset($_GET["role"]) && $_GET["role"] != ""){
  $_SESSION["role"] = $_GET["role"];
}else
{
  $_SESSION["role"] = "docente";
}
?>
<div class="col-sm-6 pull-right wow fadeInRightBig"><br>
  <img class="img-responsive " src="img/src/conceptos/basic1.jpg" alt="">
</div>
<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
  <h3 class="section-heading">Conceptos de programación</h3>
  <div class="sub-title lead3">El aprendizaje de la programación empieza por comprender los conceptos básicos necesarios. ¡Todos podemos aprender a programar!</div>
    <p class="lead">
    <h4>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      ¿El alumno conoce los conceptos empleados en la programación?
    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      ¿Conoces los conceptos empleados en la programación?
    <?php } ?>
    </h4></p>
    <p><a class="btn btn-embossed btn-success linksc" href="#test" role="button"> &nbsp;&nbsp;Si &nbsp;&nbsp; </a> 
    <a class="btn btn-embossed btn-warning linksrc" href="#basic" data="html/conceptos/recursos.php" role="button"> &nbsp;No &nbsp;</a></p>
    <div class="infoic"><a href="#test" class="linksrc" role="button" alt="Continuar el recorrido por el manual">Siguiente paso: <strong><u>Desarrolla una aplicación.</u></strong></a></div>
</div>
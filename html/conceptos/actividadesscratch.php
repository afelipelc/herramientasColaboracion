<?php
session_start();
?>
<div class="row">
  <h3 class="section-heading">Actividades en Scratch</h3>
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">   
    <img class="img-responsive " src="img/src/conceptos/sc1.png" alt="">

    <?php
      if ($_SESSION["role"] == "docente"){
        ?><br><br><br>
        <h5>Proponga a los estudiantes:</h5>
          <?php Proyecto(); ?>
          <br>
          <blockquote>
            <p>Acompañe a los estudiantes mientras se familiarizan con la herramienta y elaborar sus primeros algoritmos, ya que habrá algunos que no logren comprender como solucionar el problema o como organizar correctamente los bloques así como la función que representan en el algoritmo.
          </p>
          </blockquote>
      
    <?php } elseif ($_SESSION["role"] == "alumno") {
       ?>
       <br>
        <p>Apreder con Scratch es fácil porque es aprender arrastrando y organizando bloques, por lo tanto tu mismo puedes:</p>
          <?php Proyecto(); ?>
          <br>
          <blockquote>
            <p>No está demás solicitar a tu profesor de Metodología de la programación que ayude o explique el funcionamiento de los bloques.<br><br>
            Recuerda <i>¡Si tengo dudas, debo preguntar!</i>
          </p></blockquote>
       <?php } ?>

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
<?php
function Proyecto()
{
  ?>
  <ul>
            <li>Explorar el sitio <a href="http://scratch.mit.edu" target="_blank"><strong>Scratch.mit.edu</strong></a></li>
            <li>Explorar la información –¿qué es scratch?, como crear proyectos, como desarrollar un proyecto, como compartir un proyecto-</li>
            <li>Explorar los ejemplos</li>
  <li>Desarrollar un primer proyecto donde:
              <ul>
              <li>Emita un saludo.</li>
              <li>Se creen 3 variables.</li>
              <li>Se soliciten 3 valores numéricos y se almacenen en variables.</li>
              <li>Se se evalúen por lo menos 2 expresiones –considerar los 3 grupos de operadores-</li>
              <li>Se muestre los resultados de la evaluación de cada expresión.</li>
              <li>Se muestre un mensaje de reflexión sobre la herramienta Scratch.</li>
              </ul>
            </li>
            </ul>
  <?php
}
?>
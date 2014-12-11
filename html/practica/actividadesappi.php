<?php
session_start();
?>
<div class="row">
  <h3 class="section-heading">Actividades en App Inventor</h3>
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">   
    <img class="img-responsive center" src="img/src/practica/api13.png" alt="">
    <?php
      if ($_SESSION["role"] == "docente"){
        ?><br>
        <h5>Proponga a los estudiantes:</h5>
          <?php Proyecto(); ?>
          <br>
          <blockquote>
            <p class="text-info">Recuerde acompañar a los estudiantes mientras desarrollan sus proyectos.
          </p>
          </blockquote>
      
    <?php } elseif ($_SESSION["role"] == "alumno") {
       ?>
       <br>
        <p>Esta es una herramienta creativa para desarrollar tus propias aplicaciones, experimenta e intenta realizar:</p>
          <?php Proyecto(); ?>
          <br>
          <blockquote>
            <p class="text-info">No está demás solicitar a tu profesor de Programación mientras desarrollas tu idea.<br><br>
            Recuerda <i>¡Si tengo dudas, debo preguntar!</i>
          </p></blockquote>
       <?php } ?>

  <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#test" data="html/practica/recursos.php" role="carrusel"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://ai2.appinventor.mit.edu/" target="_blank">App Inventor v2</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#test" data="html/practica/iniciarappi.php" role="carruselpasos">Primeros pasos en App Inventor</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#test" data="html/practica/actividadesappi.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#test" data="html/practica/aprendizajeappi.php">¿Qué aprende con App Inventor?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#test" data="html/practica/actividadesappi.php">¿Qué puedes hacer en App Inventor?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#test" data="html/practica/aprendizajeappi.php">¿Qué aprendo con App Inventor?</a>
     <?php } ?>
    </div>
  </div>
  
</div>
<?php
function Proyecto()
{
  ?>
  <ul>
    <li>Agregar componentes:
      <p>Arrastrar componentes al área de diseño.</p>
    </li>
    <li>Diseñar una interfaz de usuario:
    <p>Emplear la creatividad para organizar los componentes.</p></li>
    <li>Intentar diseñar interfaces complejas:
    <p>Dar un recorrido por: <a href="http://android.inspired-ui.com/" target="_blank">android.inspired-ui.com</a> o <a href="http://www.android-app-patterns.com/" target="_blank">www.android-app-patterns.com</a></p></li>
    <li>Programar la aplicación:</p>
      <ol>
      <li>Que emita un saludo al presionar un botón.</li>
      <li>Cambiar colores de fondo, texto.</li>
      <li>Pasar de una pantalla a otra.</li>
      <li>Agregar una animación.</li>
      </ol>
    </li>
    <li>Conectar un emulador o dispositivo móvil</li>
    <li>Exportar una aplicación</li>
    </ul>
  <?php
}
?>
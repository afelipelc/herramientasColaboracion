<?php
session_start();
?>
<div class="row">
  <h3 class="section-heading">Actividad en TeamWork</h3>
  <div class="col-sm-4 pull-right wow fadeInRightBig"  data-animation-delay="200">   
    <img class="img-responsive center" src="img/src/planeacion/expo.jpg" alt="">
    <div class="sub-title lead3">Exposición de proyectos en la UTIM.</div>
  </div>
  <div class="col-sm-8 wow fadeInLeftBig"  data-animation-delay="200">   
    <?php
      if ($_SESSION["role"] == "docente"){
        ?><br>
        <h5>Organice a los estudiantes para trasladar la administración de proyectos a Web:</h5>
          <?php Proyecto(); ?>
          <br>
          <blockquote>
            <p class="text-info">Siga la metodología para la admistración de proyectos: Análisis, Planeación, Desarrollo y Cierre. Revise el progreso de las actividades, entregables y seguimiento del proyecto a través de la herramienta.
          </p>
          </blockquote>
      
    <?php } elseif ($_SESSION["role"] == "alumno") {
       ?>
       <br>
        <p>Traslada la administración de proyectos a Web:</p>
          <?php Proyecto(); ?>
          <br>
          <blockquote>
            <p class="text-info">Sigue la metodología para la admistración de proyectos: Análisis, Planeación, Desarrollo y Cierre directamente en la herramienta, ya que es más probable que la utilices en tu desempeño laboral, contribuye para que tu equipo de a conocer el progreso de las actividades, entregables y seguimiento del proyecto.</i>
          </p></blockquote>
       <?php } ?>
  </div>
</div>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">
  <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#planning" data="html/planeacion/adminproyectos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://teamwork.com/" target="_blank">Ir a TeamWork.com</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#planning" data="html/planeacion/conocertw.php" role="carrusel">Conocer TeamWork</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#planning" data="html/planeacion/actividadestw.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#planning" data="html/planeacion/beneficiostw.php">¿Qué beneficios se obtienen?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#planning" data="html/planeacion/actividadestw.php">¿Qué uso puedo hacer de TeamWork?</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#planning" data="html/planeacion/beneficiostw.php">¿En qué me beneficia TeamWork?</a>
     <?php } ?>
    </div>
  </div>
</div>
<?php
function Proyecto()
{
  ?>
  <ul>
    <li>Organización de los equipos de trabajo
    <p>Elección del lider de proyecto. Asginación de roles con base en las competencias de los estudiantes.</p></li>
    <li><h5>En TeamWork:</h5>
      <p>Crear una cuenta.</p>
    </li>
    <li>Crear un proyecto:
    <p>Que el equipo se organice para crear un proyecto en TeamWork y agregar a los colaboradores y asignación de los roles definidos.</p></li>
    <li>Agregar documentos del proyecto:
    <p>Desde el inicio hasta el cierre del proyecto se generan documentos como actas, acuerdos, contratos, etc. por ello reunan en un sólo repositorio los documentos del proyecto a los que el equipo podrá acceder con facilidad.</p></li>
    <li>(Plan de proyecto) Planificación de tareas, tiempos y responsables:</p>
      <ol>
      <li>Definan los hitos.</li>
      <li>Planifiquen las actividades.</li>
      <li>Describan las actividades.</li>
      <li>Definan los tiempos de inicio y fin para cada tarea.</li>
      <li>Asignen responsables a las tareas.</li>
      <li>Asignen datos de facturación por el trabajo del personal.</li>
      <li>Visualizar el diagrama de Gantt.</li>
      </ol>
    </li>
    <li>Seguimiento del plan de proyecto:
      <ol>
        <li>Marque las tareas cumplidas.</li>
        <li>Mantenerse en comunicación con el equipo de trabajo.</li>
        <li>Actualizar y agregar archivos del proyecto.</li>
        <li>Informar sobre los riesgos que impidan el cumplimiento de los objetivos.</li>
      </ol>
    </li>
    <li></li>
    </ul>
  <?php
}
?>
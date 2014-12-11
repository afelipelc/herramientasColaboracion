<?php
session_start();
?>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">   
    <h3 class="section-heading">¿Cómo usar GitHub + Git?</h3>
    <p>Primeramente deben conocerse los comandos básicos de Git. [<a href="#coding" class=" linksrc link" data="html/codificacion/git.php"><strong>Ver comandos de Git</strong></a>]</p>
    <div class="row">
    <div class="col-sm-10 text-center col-md-offset-1">
      <div id="owl-gh" class="owl-carousel">
        <div class="item">
          <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
            <p class="lead"><strong>1)</strong> Crear y activar una cuenta.</p>
            <p>Los alumnos deben registrarse y activar su cuenta.</p>
          </div>
          <div class="col-sm-5 wow fadeInLeftBig">
            <img class="img-responsive " src="img/src/codificacion/gh01.png" alt="">
          </div>
        </div>
        <div class="item">
        <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
          <p class="lead"><strong>2)</strong> Crear un repositorio.</p>
          <p>Por cada proyecto debe crearse un repositorio.</p>
        </div>
        <div class="col-sm-5 wow fadeInLeftBig">
          <img class="img-responsive " src="img/src/codificacion/gh1.png" alt="">
        </div>
      </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>3)</strong> Conectar repositorio.</p>
        <p>El administrador de proyecto configura el proyecto local con el repositorio.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh2.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>4)</strong> Agregar colaboradores.</p>
        <p>Agregar los colaboradores por su nombre de usuario.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh3.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>5)</strong> Registrar Issues como asignación de tareas.</p>
        <p>Los Issues se utilizan para dar seguimiento a la solución de un problema detectado o para asignar una tarea.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh4.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>6)</strong> Issues vistos por los colaboradores.</p>
        <p>Al ingresar los colaboradores a sus cuentas, verán las notificaciones.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh5.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>7)</strong> Obtención de copia de proyecto.</p>
        <p>Con el comando:<br> <strong>git clone https://github.com/CUENTA/Repositorio.git</strong><br> se obtiene una copia en la carpeta actual.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh6.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>8)</strong> Creacion de ramas.</p>
        <p>Con el comando:<br><strong>git checkout -b NombreRama</strong><br>Se crea una nueva rama de trabajo para no afectar el flujo principal.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh7.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>9)</strong> Cada colaborador hace lo suyo.</p>
        <p>Cada colaborador hace sus propios cambios en su propio equipo y rama asignada.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh8.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>10)</strong> Preparar envío.</p>
        <p>Con el comando:<br><strong>git add . </strong>y luego <strong>git commit -m ‘Mensaje’</strong><br> el colaborador prepara los cambios a enviar.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh9.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>11)</strong> El colaborador sube sus cambios.</p>
        <p>Preparado el envío, el usuario ejecuta el comando:<br><strong>git push origin NombreRama</strong> para enviar los cambios fijados.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh10.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>12)</strong> Cambios enviados al repositorio.</p>
        <p>Al ingrear al repositorio y explorar la rama enviada, puede verse que contiene el nuevo envío en los archivos afectados.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh11.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>13)</strong> Comparar y unir: merge and pull request.</p>
        <p>Revisados los cambios por el administrador, puede unirlos al proyecto principal para integrar una pieza más al proyecto. <strong><a href="https://help.github.com/articles/merging-a-pull-request" target="_blank">Ver Ayuda para unir</a></strong>.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh12.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>14)</strong> Confirmar la union.</p>
        <p>Iniciado el proceso de fusión, el administrador confirma la unión.<br>Después de esta fase, las ramas pueden ir eliminándose.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh13.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>15)</strong> Actualización de las copias locales.</p>
        <p>Cada colaborador debe sincronizarse con el repositorio con:<br><strong>git pull origin master</strong> y así obtener el proyecto completado por los colaboradores.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh14.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
        <p class="lead"><strong>16)</strong> Proyecto completo.</p>
        <p>Al completarse las uniones, ya puede tenerse una versión de la aplicación codificada en conjunto.</p>
      </div>
      <div class="col-sm-6 wow fadeInLeftBig">
        <img class="img-responsive " src="img/src/codificacion/gh15.png" alt="">
      </div>
    </div>
  </div>
  </div>
  </div>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?><br>
      <blockquote>
        <p>Lleve a los estudiantes a dar un recorrido por la ayuda de GitHub en <a href="https://help.github.com/" target="_blank"><b><u>help.github.com</u></b></a> ya que estos sólo son aspectos clave sobre cómo utilizar GitHub en el desarrollo de aplicaciones.
        </p>
      </blockquote>
      
      <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#coding" data="html/codificacion/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="https://github.com/" target="_blank">Ir a GitHub</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#coding" data="html/codificacion/iniciargh.php" role="carrusel">Cómo usar GitHub</a>
      <a class="btn btn-success btn-arrow-right linksrc" href="#coding" data="html/codificacion/actividadesgh.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#coding" data="html/codificacion/beneficiosgh.php">Beneficios de usar GitHub</a>
      </div>

    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
     <br>
      <blockquote>
        <p>Estos son aspectos clave sobre cómo utilizar GitHub, sin embargo se recomienda ampliamente consular la ayuda disponible en <a href="https://help.github.com/" target="_blank"><b><u>help.github.com</u></b></a>
        </p>
      </blockquote>
      <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#coding" data="html/codificacion/recursos.php" role="button"> Volver a Recursos </a>
        <a class="btn btn-default btn-arrow-right" href="https://github.com/" target="_blank">Ir a GitHub</a>
        <a class="btn btn-primary btn-arrow-right linksrc" href="#coding" data="html/codificacion/iniciargh.php" role="carrusel">Cómo usar GitHub</a>
         <a class="btn btn-success btn-arrow-right linksrc" href="#coding" data="html/codificacion/actividadesgh.php">¿Qué hacer en GitHub?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#coding" data="html/codificacion/beneficiosgh.php">Beneficios de usar GitHub</a>
      </div>
    <?php } ?>
  </div>
</div>

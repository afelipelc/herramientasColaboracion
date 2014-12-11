<?php
session_start();
?>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">   
    <h3 class="section-heading"><a href="http://ai2.appinventor.mit.edu/" target="_blank">Primeros pasos con MIT App Inventor</a></h3>

    <div class="row">
    <div class="col-sm-10 text-center col-md-offset-1">
      <div id="owl-appi" class="owl-carousel">
        <div class="item">
          <div class="col-sm-10 wow col-md-offset-1"  data-animation-delay="200"><h4>Interfaz de usuario de App Inventor</h4>
          <img class="img-responsive " src="img/src/practica/api1.png" alt="">
          </div>
      </div>
      <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Crea un proyecto</h4>
        <p>Empieza por crear el proyecto para dar desarrollar la idea. Puede ser una aplicación, o un videojuego.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api2.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Área de diseño</h4>
        <p>Conoce el espacio donde se visualiza el diseño de las interfaces de usuario.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api3.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Componentes de una interfaz</h4>
        <p>Explora y conoce los componentes que pueden utilizarse en una interfaz de usuario.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api4.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Propiedades de cada componente</h4>
        <p>Cada componente agregado a la interfaz de usuario puede configurarse desde sus propiedades.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api5.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Alterna entre Diseño y Programación</h4>
        <p>App Inventor provee 2 partes del proyecto: Diseño y Programación por bloques.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api6.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Explora los bloques</h4>
        <p>Los bloques se agrupan en categorías, y componentes de interfaz de usuario.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api7.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Programa la aplicación</h4>
        <p>De acuerdo a la lógica de la aplicación, organiza los bloques correspondientes.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api8.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4><a href="https://play.google.com/store/apps/details?id=edu.mit.appinventor.aicompanion3" target="_blank">Prepara tu móvil</a></h4>
        <p>App Inventor se acompaña de una aplicación Android donde pueden ejecutarse los proyectos. Obtener <strong><a href="https://play.google.com/store/apps/details?id=edu.mit.appinventor.aicompanion3" target="_blank">MIT AI2 Companion</a></strong>.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api9.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Conecta tu móvil</h4>
        <p>Conecta tu MIT AI2 Companion con tu proyecto Android a través de la opción Conectar</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api10.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Experimenta tu aplicación</h4>
        <p>Al conectar MIT AI2 Companion la aplicación se ejecutará automáticamente en el móvil.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/practica/api11.png" alt="">
      </div>
    </div>
  </div>
  </div>
  </div>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?><br>
      <blockquote>
        <p>Al desarrollar una aplicación funcional el estudiante pone en práctica sus competencias en programación e ingeniería de software para expresar sus ideas por medio de la creatividad, que le ayudará a adquirir experiencia como desarrollador de software.
      </p>
      </blockquote>
      
      <div>
        <a class="btn btn-warning btn-arrow-left linksrc options" href="#test" data="html/practica/recursos.php" role="carrusel"> Volver a Recursos </a>
        <a class="btn btn-default btn-arrow-right" href="http://ai2.appinventor.mit.edu/" target="_blank">App Inventor v2</a>
        <a class="btn btn-primary btn-arrow-right linksrc" href="#test" data="html/practica/iniciarappi.php" role="carruselpasos">Primeros pasos en App Inventor</a>
        <a class="btn btn-success btn-arrow-right linksrc" href="#test" data="html/practica/actividadesappi.php">Actividades para el alumno</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#test" data="html/practica/aprendizajeappi.php">¿Qué aprende con App Inventor?</a>
      </div>

    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
     <br>
      <blockquote>
        <p>Al desarrollar una aplicación funcional pones en práctica tus competencias en programación e ingeniería de software para expresar tus ideas por medio de la creatividad, que te ayudará a adquirir experiencia como desarrollador de software.
        </p>
      </blockquote>
      <div>
        <a class="btn btn-warning btn-arrow-left linksrc options" href="#test" data="html/practica/recursos.php" role="carrusel"> Volver a Recursos </a>
        <a class="btn btn-default btn-arrow-right" href="http://ai2.appinventor.mit.edu/" target="_blank">App Inventor v2</a>
        <a class="btn btn-primary btn-arrow-right linksrc" href="#test" data="html/practica/iniciarappi.php" role="carruselpasos">Primeros pasos en App Inventor</a>
        <a class="btn btn-success btn-arrow-right linksrc" href="#test" data="html/practica/actividadesappi.php">¿Qué puedo hacer?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#test" data="html/practica/aprendizajeappi.php">¿Qué aprendo con App Inventor?</a>
      </div>
    <?php } ?>
  </div>
</div>
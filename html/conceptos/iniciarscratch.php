<?php
session_start();
?>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">   
    <h3 class="section-heading"><a href="http://scratch.mit.edu/" target="_blank">Primeros pasos con Scratch</a></h3>
    <div class="row">
    <div class="col-sm-10 text-center col-md-offset-1">
      <div id="owl-scratch" class="owl-carousel">
        <div class="item">
          <div class="col-sm-10 wow col-md-offset-1"  data-animation-delay="200"><h4>Interfaz de usuario de Scratch</h4>
          <img class="img-responsive " src="img/src/conceptos/sc1.png" alt="">
        </div>
      </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Crea un escenario</h4>
        <p>Decora un escenario, incluye objetos o actores.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/sc2.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Explora las categorías de bloques</h4>
        <p>Los bloques están agrupados por la función que desempeñan.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/sc3.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Conoce los bloques</h4>
        <p>Acercate a los bloques de cada categoría, identifica su funcionalidad, conoce a todo el grupo.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/sc5.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Implementa el algoritmo</h4>
        <p>Organiza los bloques que determinarán las acciones a realizar por cada objeto actor.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/sc4.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Diseña tus propios actores</h4>
        <p>Utiliza el editor gráfico para crear diseños personalizados.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/sc6.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Edita sonidos</h4>
        <p>Graba o agrega sonidos desde la galería para utilizarlos en el escenario.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/sc7.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Comparte el proyecto</h4>
        <p>Permite que la comunidad conozca lo que haces, comparte con el mundo.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/sc8.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Colabora con los demás</h4>
        <p>Aporta ideas creativas hacia proyectos compartidos por otros usuarios a través de comentarios.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/sc9.png" alt="">
      </div>
    </div>
  </div>
  </div>
  </div>
    <?php
    if ($_SESSION["role"] == "docente"){
      ?><br>
      <blockquote>
        <p>El desarrollo de la lógica empieza por la observación y el análisis, ya que se quiere que el alumno aprenda a resolver problemas a través de algoritmos.<br>
      Scratch ofrece la facilidad de aprender a través del armado de bloques que puede traducir a código.
      </p>
      </blockquote>
      
      <div>
        <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
        <a class="btn btn-default btn-arrow-right" href="http://scratch.mit.edu/" target="_blank">Ir a Scratch.mit.edu</a>
        <a class="btn btn-primary btn-arrow-right linksrc" href="#basic" data="html/conceptos/iniciarscratch.php" role="carruselscratch">Primeros pasos con Scratch</a>
        <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadesscratch.php">Actividades para el alumno</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajescratch.php">¿Qué aprende con Scrach?</a>
      </div>

    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
     <br>
      <blockquote>
        <p>El desarrollo de la lógica empieza por la observación y el análisis, ya que se quiere que aprendas a resolver problemas a través de algoritmos.<br>
        Scratch ofrece la facilidad de aprender a programar a través del armado de bloques y crear así algoritmos, juegos, animaciones y arte.
        </p>
      </blockquote>
      <div>
        <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
        <a class="btn btn-default btn-arrow-right" href="http://scratch.mit.edu/" target="_blank">Ir a Scratch.mit.edu</a>
        <a class="btn btn-primary btn-arrow-right linksrc" href="#basic" data="html/conceptos/iniciarscratch.php" role="carruselscratch">Primeros pasos con Scratch</a>
        <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadesscratch.php">¿Qué puedo hacer?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajescratch.php">¿Qué aprendo con Scrach?</a>
      </div>
    <?php } ?>
  </div>
</div>
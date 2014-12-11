<?php
session_start();
?>
<div class="row">
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">   
    <h3 class="section-heading">Aprender con PSeInt</h3>
    
    <div class="row">
    <div class="col-sm-10 text-center col-md-offset-1">
      <div id="owl-pseint" class="owl-carousel">
        <div class="item">
        <div class="col-sm-6 wow"  data-animation-delay="200">
          <h4>Define variables</h4>
          <p>Utiliza los tipos de datos básicos: Entero, Cadena, Real, Lógico.</p>
        </div>
        <div class="col-sm-6 wow">
          <img class="img-responsive " src="img/src/conceptos/ps2.png" alt="">
        </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Haz que el programa inteactúe con el usuario.</p>
        <p>Emite mensajes para el usuario, solicita información que proporcione el usuario como datos de entrada del algoritmo.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/ps3.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Programa las instrucciones</p>
        <p>Emplea operadores artiméticos, lógicos, relacionales; utiliza estructuras de control para dar sentido a las instrucciones de forma lógica.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/ps4.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Ejecuta el algoritmo</p>
        <p>Comprueba la solución por medio de la ejecución; si de detectan problemas, rectifica las instrucciones.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/ps5.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Utiliza los comandos</p>
        <p>Automáticamente agrega la sintaxis de las estructuras de control para facilitar el aprendizaje.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/ps6.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Ejecuta el algoritmo paso a paso</p>
        <p>La herramienta permite la explicación de las instrucciones, así el aprendíz conocerá como se ejecuta el programa y como se comporta.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/ps7.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Consulta la ayuda</p>
        <p>La ayuda proporcionada explica los conceptos de programación y proporciona ejemplo en lenguaje de Pseudocódigo.</p>
      </div>
      <div class="col-sm-6 wow">
        <img class="img-responsive " src="img/src/conceptos/ps8.png" alt="">
      </div>
    </div>
    <div class="item">
      <div class="col-sm-6 wow"  data-animation-delay="200">
        <h4>Analiza el Diagrama de Flujo</p>
        <p>Comprender los diagramas de flujo es de vital importancia en la programación.</p>
      </div>
      <div class="col-sm-5 wow">
        <img class="img-responsive " src="img/src/conceptos/ps9.png" alt="">
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
      PSeInt ofrece la facilidad de aprender a través de Pseudocódigo o falso lenguaje, que es flexible para aceptar palabras del lenguaje natural, además que puede configurarse de modo fácil y estricto como un lenguaje de programación.
      </p>
      </blockquote>
      
      <div>
        <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
        <a class="btn btn-default btn-arrow-right" href="http://pseint.sourceforge.net/index.php?page=descargas.php" target="_blank">Obtener PSeInt</a>
        <a class="btn btn-primary btn-arrow-right linksrc" href="#basic" data="html/conceptos/iniciarpseint.php" role="carruselpseint">Primeros pasos con PSeInt</a>
        <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadespseint.php">Actividades para el alumno</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajepseint.php">¿Qué aprende con PSeInt?</a>
      </div>

    <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
     <br>
      <blockquote>
        <p>El desarrollo de la lógica empieza por la observación y el análisis, ya que se quiere que aprendas a resolver problemas a través de algoritmos.<br>
        PSeInt ofrece la facilidad de aprender a través de Pseudocódigo o falso lenguaje, que es flexible para aceptar palabras del lenguaje natural, además que puede configurarse de modo fácil y estricto como un lenguaje de programación.
        </p>
      </blockquote>
      <div>
        <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
        <a class="btn btn-default btn-arrow-right" href="http://pseint.sourceforge.net/index.php?page=descargas.php" target="_blank">Obtener PSeInt</a>
        <a class="btn btn-primary btn-arrow-right linksrc" href="#basic" data="html/conceptos/iniciarpseint.php" role="carruselpseint">Primeros pasos con PSeInt</a>
        <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadespseint.php">¿Qué puedo hacer?</a>
        <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajepseint.php">¿Qué aprendo con PSeInt?</a>
      </div>
    <?php } ?>
  </div>
</div>
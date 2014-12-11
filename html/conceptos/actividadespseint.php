<?php
session_start();
?>
<div class="row">
  <h3 class="section-heading">Actividades en PSeInt</h3>
  <div class="col-sm-12 wow fadeInLeftBig"  data-animation-delay="200">   
    <img class="img-responsive center" src="img/src/conceptos/ps10.png" alt="">
    <?php
      if ($_SESSION["role"] == "docente"){
        ?><br>
        <h5>Proponga a los estudiantes:</h5>
          <?php Proyecto(); ?>
          <br>
          <blockquote>
            <p>Recuerde acompañar a los estudiantes mientras desarrollan sus algoritmos, ya que habrá algunos que no logren comprender como solucionar el problema.
          </p>
          </blockquote>
      
    <?php } elseif ($_SESSION["role"] == "alumno") {
       ?>
       <br>
        <p>Apreder con PSeint es aprender a escribir código que posteriormente te ayudará a familiarizarte con cualquier lenguaje de programación, mientras tanto debes:</p>
          <?php Proyecto(); ?>
          <br>
          <blockquote>
            <p>No está demás solicitar ayuda a tu profesor de Metodología de la programación que te ayude o explique la sintaxis del pseudocódigo y la lógica que deben seguir las instrucciones para armar la solución.<br><br>
            Recuerda <i>¡Si tengo dudas, debo preguntar!</i>
          </p></blockquote>
       <?php } ?>

  <div>
      <a class="btn btn-warning btn-arrow-left linksrc options" href="#basic" data="html/conceptos/recursos.php" role="button"> Volver a Recursos </a>
      <a class="btn btn-default btn-arrow-right" href="http://pseint.sourceforge.net/index.php?page=descargas.php" target="_blank">Obtener PSeInt</a>
      <a class="btn btn-primary btn-arrow-right linksrc" href="#basic" data="html/conceptos/iniciarpseint.php" role="carruselpseint">Primeros pasos con PSeInt</a>
      <?php
    if ($_SESSION["role"] == "docente"){
      ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadespseint.php">Actividades para el alumno</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajepseint.php">¿Qué aprende con PSeInt?</a>
      <?php } elseif ($_SESSION["role"] == "alumno") {
     ?>
      <a class="btn btn-success btn-arrow-right linksrc" href="#basic" data="html/conceptos/actividadespseint.php">¿Qué puedo hacer?</a>
      <a class="btn btn-info btn-arrow-right linksrc" href="#basic" data="html/conceptos/aprendizajepseint.php">¿Qué aprendo con PSeInt?</a>
     <?php } ?>
    </div>

  </div>
</div>
<?php
function Proyecto()
{
  ?>
  <ul>
            <li>Empezar con un algoritmo básico:
              <p>Cree un algoritmo que solicite al usuario su nombre, y tres valores numéricos. Al proporcionar los datos el programa diga el nombre y el resultado de la suma de los valores ingresados.</p>
            </li>
            <li>Elaborar un algoritmo para:
            <p>Calcular el volumen de un cilindro.</p></li>
            <li>Elaborar un algoritmo para:
            <p>Realizar la conversión de un determinado número de grados Fahrenheit a Celsius.</p></li>
  <li><p><strong>Pasar a algoritmos más complejos:</strong></p>
              <ol>
              <li><strong>1) </strong>Proporcionado el nombre y 5 calificaciones de un alumno sólo entre 0 y 10 obtenidas durante el primer parcial; calcule el promedio el cual deberá ser redondeado de acuerdo a lo siguiente: Si el promedio es menor que 8 debe dejarse como tal sinredondear, si el promedio está entre 8.0 y 8.4 redondear a 8, si está entre 8.5 y 9.4 redondear a 9, si está entre 9.5 y 10 redondear a 10. Imprima el nombre del alumno y el promedio final, además, si el promedio es 8 diga “Acredita como: Suficiente”, si es 9 diga “Acredita como: Destacado” y si es 10 diga “Acredita como: Autónomo”, en caso contrario diga: “No acredita”.</li>
              <li><strong>2) </strong>Algoritmo que pregunte al usuario cuantos valores numéricos quisiera ingresar, y a partir de ello el algoritmo solicite esa cantidad de números; y de acuerdo a los valores recibidos, el algoritmo determine cuántos de estos números se encuentran: entre 1 y 100, cuantos entre 101 y 200, y cuantos entre 201 y 300, y cuantos no se encuentran dentro de los 3 rangos anteriores.</li>
              <li><strong>3) </strong>Programa que represente la sucesión de Fibonacci hasta el número que ingrese el usuario. “En matemáticas, la sucesión de Fibonacci (a veces mal llamada serie de Fibonacci) es la siguiente sucesión infinita de números naturales: 1,1,2,3,5,8,13,21,34,55,89,144,233,377,... La sucesión comienza con los números 1 y 1, y a partir de estos, «cada término es la suma de los dos anteriores», es la relación de recurrencia que la define” (Wikipedia).</li>
              <li><strong>4) </strong>Programa que solicite al usuario un número mayor que 20, si y solo sí el número es mayor que 20 muestre al usuario la serie de números primos dentro del rango de 1 hasta el número ingresado.</li>
              </ol>
            </li>
            </ul>
  <?php
}
?>
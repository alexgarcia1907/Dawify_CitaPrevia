<?php

/**
 * Funcio crear calendari
 *
 * @param numeromes $mesfuncio
 * @param numeroany $anyfuncio
 * @param numsdiesfesta $festius
 * @return calendarienhtml
 */

function creaCalendari($diadt, $diesamostrar, $modelcita, $festius = array()) {


  $muchotexto = "";
    $diessetmana = array("Dilluns","Dimarts","Dimecres", "Dijous","Divendres","Dissabte","Diumenge");
    $ds = array("Dl", "Dm", "Dmc", "Dj", "Dv", "Ds", "Dg");
    $diaactualsetmana = date("N");

   
    $muchotexto = $muchotexto.('<table class="mes"><tr class="mesu">
    <th colspan="7"> Cita prèvia</th></tr><tr class="setmana">');

      for ($i=0;$i<7;$i++) {
        $muchotexto = $muchotexto.("<td><span class='diescomplets'>").$diessetmana[$i].("</span><span class='diesabr'>").$ds[$i].("</span></td>");
      }

      $muchotexto = $muchotexto.('</tr>');

      $totalceldas = $diaactualsetmana-1 + $diesamostrar + (7-(($diesamostrar + $diaactualsetmana-1)%7));
      $celdasquellevo = 0;
     
      for ($i = 0; $i < date("N") -1; $i++) {
        if($celdasquellevo % 7 == 0) {
          $muchotexto = $muchotexto . '<tr class="white">';
        }

        $muchotexto = $muchotexto . '<td></td>';
        $celdasquellevo++;
      }

      for ($i = 0; $i < $diesamostrar; $i++) {
        if($celdasquellevo % 7 == 0) {
          $muchotexto = $muchotexto . '<tr class="white">';
        }

          $muchotexto = $muchotexto . '<td class ="dia'.$i.'"><button class="white prov dia" data-toggle="modal" data-dia="'.$diadt->format("Y-m-j").'" data-target="#'.$i.'Modal">'.$diadt->format("M j").'</button></td>';
          $citesdeldia = $modelcita->obtenircitesundia($diadt->format("Y-m-j"));
          if (sizeof($citesdeldia) >= 9) {
            $diesplens[] = $i;

          }
          $diadt->modify("+1 day");

        if ($celdasquellevo % 7 == 6) {
          $muchotexto = $muchotexto . "</tr>";
        }
        $celdasquellevo++;
      }

      for ($i = 0; 0 != ($celdasquellevo % 7); $i++) {
        $muchotexto = $muchotexto . '<td></td>';
        $celdasquellevo++;
      }
      
      $muchotexto = $muchotexto . '</tr></table>';
      for ($i = 0; $i < sizeof($diesplens); $i++) {
        $muchotexto = $muchotexto.'<script>$("td.dia'.$diesplens[$i].'").addClass("bg-ple");</script>';
      }
      return $muchotexto;
}


/**
 * Funció per mostrar una taula amb totes les cites que hi ha a la BDD, mostrar en l'apartat de configuració de l'admin.
 *
 * @param [Model cita] $cita
 * @return void $todo
 */
function mostrardatos($cita){
  $datos = $cita -> obtenirtot();
  $todo = "";

  $todo = $todo . ('<div class="confu"><div class="header-config rese">
  <h5>Reserves</h5></div><div class="body-config"><table class="tablius">
  <tr class="setmana"><th>Usuari</th> <th>Hora</th><th class="ides">Comentari</th><th></th></tr>');

    foreach ($datos as $fila){
        $todo = $todo . ('<tr><td>'.$fila["nom"].'</td><td>'.$fila["data"].'</td><td class="ides">'.$fila["comentari"].'</td><td><form method="post" action="index.php"><input hidden name="r" value="borracita"><button name="cita" value="'.$fila["idcita"].'" type="submit" class="btn btn-dark eliusu">Elimina</button></form></td></tr>');  
    }
    
    $todo = $todo . ('</table></div></div>');
    return $todo;
}
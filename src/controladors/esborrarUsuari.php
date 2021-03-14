<?php

/**
    * Controlador que gestiona l'esborrat d'usuaris.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Esborra un usuari i redirigeix al llistat.  L'esborrat és soft, canvia el camp esborrat a 1
    *
**/

/**
  * ctrlEsborrarUsuari: Controlador que esborra usuaris
  *
  * @param $peticio contingut de la petiicó http.
  * @param $resposta contingut de la resposta http.
  * @param array $config  paràmetres de configuració de l'aplicació
  *
**/
function ctrlEsborrarUsuari($peticio, $resposta, $config)
{
    $delete = $peticio->get(INPUT_GET, "delete");

    $usuaris = new \Daw\UsuarisPDO($config["db"]);
    $usuaris->borrarusuari($delete);
    
    $resposta->redirect("location: index.php?r=llistausuaris");
    
    return $resposta;
}

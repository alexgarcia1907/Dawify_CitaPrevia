<?php

/**
    * Controlador de la pàgina d'error d'exemple del Framework Emeset
    * Framework d'exemple per a M07 Desenvolupament d'aplicacions web.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega la portada
    *
**/

/**
  * ctrlError: Controlador que carrega la pàgina d'error
  *
  * @param $peticio contingut de la petiicó http.
  * @param $resposta contingut de la resposta http.
  * @param array $config  paràmetres de configuració de l'aplicació
  *
**/
function ctrlError($peticio, $resposta, $config)
{

    $error = $nom = $peticio->get("SESSION", "error");
    $resposta->set("error", $error);
    $resposta->SetTemplate("error.php");

    return $resposta;
}

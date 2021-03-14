<?php

/**
    * Controlador per editar un usuari d'exemple del Framework Emeset
    * Framework d'exemple per a M07 Desenvolupament d'aplicacions web.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega el formulari d'edició d'usuaris
    *
**/

/**
  * ctrlEditarUsuari: Controlador que carrega  el formulair d'edició d'usuaris
  *
  * @param $peticio contingut de la petiicó http.
  * @param $resposta contingut de la resposta http.
  * @param array $config  paràmetres de configuració de l'aplicació
  *
**/
function ctrlEditarUsuari($peticio, $resposta, $config) {
    $usuaris = new \Daw\UsuarisPDO($config["db"]); 

    $id = $peticio->get(INPUT_GET, "id");
    $usuari = $usuaris->getdades($id);

    $resposta->set("usuari", $usuari[0]);
    $resposta->SetTemplate("editarusuari.php");

    return $resposta;
}

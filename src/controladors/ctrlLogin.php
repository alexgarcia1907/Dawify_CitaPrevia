<?php
/**
 * Controlador que ens comprova si l'usuari esta logat.
 *
 * @param $sessio comprovar usuari de la sessio
 * @return void
 */
function ctrlLogin($peticio, $resposta, $config){
    // Comptem quantes vegades has visitat aquesta pàgina
    $error = $peticio->get("SESSION", "error");
    
    $resposta->set("error", $error);
    $resposta->setSession("error", "");

    $resposta->SetTemplate("login.php");

    return $resposta;
}
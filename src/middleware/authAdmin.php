<?php

/**
 * Middelware que gestiona l'autenticació amb rol d'admin
 *
 * @param petitcio $peticio
 * @param resposta $resposta
 * @param funcio $next  ha de ser el controlador
 * @param array $config  paràmetres de configuració de l'aplicació
 * @return result
 */
function authAdmin($peticio, $resposta, $config, $next) {
    
    $usuaris = new \Daw\UsuarisPDO($config["db"]); 

    $usuari = $peticio->get("SESSION", "usuari");
    $logat = $peticio->get("SESSION", "logat");

    if(!isset($logat)){
        $usuari = "";
        $logat = false;
    } 

    $usuariActual = $usuaris->getdades($usuari);

    $usuariActual = $usuariActual[0];

    $resposta->set("usuariLogat", $usuari);
    $resposta->set("logat", $logat);
    $resposta->set("usuariActual", $usuariActual);

    // si l'usuari està logat permetem carregar el recurs
    if($logat) {
        if($usuariActual["rol"] === "admin") {
            $resposta = $next($peticio, $resposta, $config);
        } else {
            $resposta->redirect("location: index.php");    
        }    
    } else {
        $resposta->redirect("location: index.php?r=login");
    }
    return $resposta;
}
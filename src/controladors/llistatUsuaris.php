<?php

/**
    * Controlador del llistat d'usuaris d'exemple del Framework Emeset
    * Framework d'exemple per a M07 Desenvolupament d'aplicacions web.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Carrega el llistat d'usuaris
    *
**/

/**
  * ctrlLlistatUsuaris: Controlador que carrega  el llistat d'usuaris
  *
  * @param $peticio contingut de la petiicó http.
  * @param $resposta contingut de la resposta http.
  * @param array $config  paràmetres de configuració de l'aplicació
  *
**/
function ctrlLlistatUsuaris($peticio, $resposta, $config)
{
    $usuaris = new \Daw\UsuarisPDO($config["db"]); 

    $usuari = $peticio->get("SESSION", "usuari");
    $usuariActual = $peticio->get('SESSION',$usuari);
    
    $llistat = $usuaris->gettots();

    $resposta->set("llistat", $llistat);
    $resposta->SetTemplate("llistatusuaris.php");

    return $resposta;
}

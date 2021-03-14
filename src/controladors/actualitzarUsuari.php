  
<?php

/**
    * Controlador que gestiona l'actualitzat d'usuaris.
    * Exemple per a M07.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Actualitza un usuari i redirigeix al llistat.  
    *
**/

/**
  * ctrlActualitzarUsuari: Controlador que actualitza usuaris
  *
  * @param $peticio contingut de la petiicó http.
  * @param $resposta contingut de la resposta http.
  * @param array $config  paràmetres de configuració de l'aplicació
  *
**/
function ctrlActualitzarUsuari($peticio, $resposta, $config)
{
    $codi = $peticio->get(INPUT_POST, "codi");
    $correu = $peticio->get(INPUT_POST, "correu");
    $rol = $peticio->get(INPUT_POST, "rol");

    $usuaris = new \Daw\UsuarisPDO($config["db"]);
    $usuaris->actualitzar($codi, $correu, $rol);
    
    $resposta->redirect("location: index.php?r=llistausuaris");
    
    return $resposta;
}
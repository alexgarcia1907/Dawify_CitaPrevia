<?php
/**
 * Funcio per comprovar que l'usuari del login ha introduit be les credencials.
 *
 * @param $sessio comprovar usuari de la sessio.
 * @param $parametre parametres que ens pasen per post.
 * @param $usuaris comprovar els usuaris de la base de dades.
 * @return void
 */

function ctrlvalLogin($peticio, $resposta, $config){
    $usuaris = new \Daw\UsuarisPDO($config["db"]); 

    $usuari = $peticio->get(INPUT_POST, "usuarilogin");
    $clau = $peticio->get(INPUT_POST, "contrasenyalogin");

    $usuariActual =  $usuaris->getdades($usuari);
    
    $usuariActual = $usuariActual[0];
    if (password_verify($clau, $usuariActual["contrasenya"]) === true /* && $usuariActual["borrat"] == 0 */) {
      if(password_needs_rehash($usuariActual["contrasenya"], PASSWORD_DEFAULT, $config["hash"])){
        $hash = password_hash($clau, PASSWORD_DEFAULT, $config["hash"]);
        $usuaris->actualitzarClau($usuariActual["id"], $hash);
      }
      $resposta->setSession("usuari", $usuari );
      $resposta->setSession("logat", true);
      
      
      $resposta->redirect("location: index.php");
    } else {
      $resposta->setSession("error", "Usuari o clau incorrectes!");
      $resposta->setSession("logat", false);
      $resposta->redirect("location: index.php?r=login");
    }

    return $resposta;
}
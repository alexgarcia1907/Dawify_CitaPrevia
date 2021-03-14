<?php

/**
 * Controlador per registrar l'usuari.
 * Controlem que l'usuari ja estigui registrat, inserim la password encriptada.
 *
 */

function ctrlRegistrar($peticio, $resposta, $config)
{
    $usuaris = new \Daw\UsuarisPDO($config["db"]); 

    $usuari = $peticio->get(INPUT_POST, "usuarireg");
    $clau = $peticio->get(INPUT_POST, "contrasenyareg");
    $clau2 = $peticio->get(INPUT_POST, "contrasenya2reg");

    $correu = $peticio->get(INPUT_POST, "mail");


    if (!$usuaris->getdades($usuari) && $usuari != "" && $clau != "" && $clau2 != "" && $correu != "" && ($clau == $clau2)) {
        $hash = password_hash($clau, PASSWORD_DEFAULT, $config["hash"]);
        $dadesregister = [];
        $dadesregister["nom"] = trim(filter_var( $usuari, FILTER_SANITIZE_STRING));
        $dadesregister["correu"] = trim(filter_var( $correu, FILTER_SANITIZE_EMAIL));
        $dadesregister["contrasenya"]  = $hash;
        print_r($dadesregister);

        $usuaris->afegir($dadesregister);
        $resposta->setSession("usuari", $usuari);
        $resposta->setSession("logat", true);
        $resposta->redirect("location: index.php");
    
    } else {
        $resposta->setSession("logat", false);
        $resposta->redirect("location: index.php?r=login");
    }
    
    return $resposta;
}


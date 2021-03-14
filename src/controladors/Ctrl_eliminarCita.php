<?php

/**
 * Controlador per eliminar una cita des de configuracio de l'admin.
 *
 * @param [$_POST] $post
 * @param [Model cita] $cita
 * @param [Model usuari] $usuari
 * @param [$_SESSION] $sesio
 * @return void
 */
function ctrlEliminaCita($peticio, $resposta, $config) {
    $nomusuari = $peticio->get('SESSION','usuari');
    $usuario = new \Daw\UsuarisPDO($config["db"]); 
    $rol = $usuario -> getrol($nomusuari);

    if ($rol != "admin") {
        $resposta->redirect("location: index.php");
        return $resposta;
        die();
    } else {
        $cita = new \Daw\TasquesPDO($config["db"]);
        $idcita = $peticio->get(INPUT_POST, "cita");
        if (isset($idcita) && $idcita != ""){

            $idcita = trim(filter_var($idcita, FILTER_SANITIZE_STRING));

            $cita->borrarunacita($idcita);

            $resposta->redirect("Location: index.php?r=configadmin");
            return $resposta;
        }
    }
}
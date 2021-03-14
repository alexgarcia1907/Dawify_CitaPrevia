<?php

/**
 * Controlador per validar la reserva que s'esta efectuant, i inserir-la a la BDD.
 *
 * @param [$_POST] $post
 * @param [$_SESSION] $sesio
 * @param [Model usuari] $usuari
 * @param [Model cita] $cita
 * @return void
 *$post, $sesio, $usuari, $cita*/
function ctrlvalPortada($peticio,$resposta,$config){

    $usuari = new \Daw\UsuarisPDO($config["db"]); 
    $cita = new \Daw\TasquesPDO($config["db"]); 
    $hora = $peticio->get(INPUT_POST, "hora");
    $coment = $peticio->get(INPUT_POST, "coment");
    $dia = $peticio->get(INPUT_POST, "dia");
    if(!$peticio->get('SESSION','logat')){
        $resposta->redirect("location: index.php?r=login");

    } else {
        if (isset($hora) && isset($coment) && $hora != ""){
            
            $dadescita = [];
            $error = "";

            $hora = trim(filter_var($hora, FILTER_SANITIZE_STRING));
            $comentari = trim(filter_var($coment, FILTER_SANITIZE_STRING));
            $dia = trim(filter_var($dia, FILTER_SANITIZE_STRING));

            $fecha = $dia ." ". $hora .":00";

            $dadescita["idusuari"] = $usuari -> getid($peticio->get('SESSION','usuari'));
            $dadescita["data"] = $fecha;
            $dadescita["comentari"] = $comentari;

            if(!$cita -> afegir($dadescita)){
                $error = 1;
            }
            $resposta->redirect("location: index.php?error=$error");

        }
        else{
            $resposta->redirect("location: index.php");
        }
    }  
    return $resposta;

}
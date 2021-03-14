<?php

/**
 * Funció per comprovar si és l'admin el que esta intentant entrar a la configuració.
 *
 * @param [Model usuari] $usuari
 * @param [$_SESSION] $sesio
 */
function ctrlConfigAdmin($peticio, $resposta, $config){
    $nomusuari = $peticio->get('SESSION','usuari');
    $usuario = new \Daw\UsuarisPDO($config["db"]); 
    $rol = $usuario -> getrol($nomusuari);

    if ($rol != "admin") {
        $resposta->redirect("location: index.php");
        return $resposta;
    }else{
        $cita = new \Daw\TasquesPDO($config["db"]);
        $datos = mostrardatos($cita);
        $resposta->set("datos",$datos);
        $resposta->SetTemplate("portadaconfig.php");
        return $resposta;
    }
}


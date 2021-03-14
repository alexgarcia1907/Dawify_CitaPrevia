<?php

/**
 * Funció per comprovar si és l'admin el que esta intentant entrar a la configuració.
 *
 * @param [Model usuari] $usuari
 * @param [$_SESSION] $sesio
 */
function ctrlTancaSess($peticio,$resposta,$config){
    session_unset();
    $resposta->redirect("location: index.php");
    return $resposta;
}
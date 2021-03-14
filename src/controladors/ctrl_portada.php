<?php

/**
 * Controlador per mostrar la portada amb totes les dades necessaries.
 *
 * @param [$_SESSION] $sesio
 * @param [Model usuari] $usuario
 * @param [Model cita] $cita
 * @param [Dies a mostrar] $diesdeportada
 * @param [Array festius] $festius
 * @param string $error
 * @return void
 */
function ctrl_portada($peticio, $resposta, $config){
    /* if (!$peticio->get('SESSIO',logat)) {
        header("Location: index.php?r=login");
        die();
    } */

    $usuario = new \Daw\UsuarisPDO($config["db"]); 
    $cita = new \Daw\TasquesPDO($config["db"]);
    $nomusuari = $peticio->get('SESSION','usuari');

    if($error == 1){
        echo("<div class=alert>Aquesta hora ja esta reservada.</div>" );
    }

    $calendar = creaCalendari(new DateTime(), $config["dies"], $cita, $config["festius"]);

    $data = new DateTime();

    $rol = $usuario -> getrol($nomusuari);
    
    $modals = $modals . '<div class="modal fade" id="0Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reserves</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <div class="modal-body">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel·la</button>
        </div>
        </div>
    </div>
</div>
</div>
</div>';

    if ($rol != "admin") {
       
        $resposta->set("modals",$modals);
        $resposta->set("calendar",$calendar);
        $resposta->SetTemplate("portada1.php");   
                     
    } else {

        $resposta->set("modals",$modals);
        $resposta->set("calendar",$calendar);
        $resposta->SetTemplate("portadadmin.php");   
        
    }
    return $resposta;
}






//-------------------------------------------------------------------------------------------


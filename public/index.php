<?php

/**
 * Front controler
 * Exemple de MVC per a M07 Desenvolupament d'aplicacions web en entorn de servidor.
 * Aquest Framework implementa el mínim per tenir un MVC per fer pràctiques
 * de M07.
 * @author: Dani Prados dprados@cendrassos.net
 * @version 0.1.0
 *
 * Punt d'netrada de l'aplicació exemple del Framework Emeset.
 * Per provar com funciona es pot executar php -S localhost:8000 a la carpeta public.
 * I amb el navegador visitar la url http://localhost:8000/
 *
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE);


include "../src/controladors/llistatUsuaris.php";
include "../src/controladors/esborrarUsuari.php";
include "../src/controladors/editarUsuari.php";
include "../src/controladors/actualitzarUsuari.php";

include "../src/middleware/auth.php";
include "../src/middleware/authAdmin.php";
//include "../src/models/sessio.php";

include "../src/config.php";
include "../src/funcions.php";

include "../src/controladors/ctrlLogin.php";
include "../src/controladors/ctrlvalLogin.php";
include "../src/controladors/ctrl_portada.php";
include "../src/controladors/ctrl_TancaSess.php";
include "../src/controladors/Ctrl_eliminarCita.php";
include "../src/controladors/ctrlvalRegister.php";
include "../src/controladors/ctrl_ConfigAdmin.php";
include "../src/controladors/ctrlvalPortada.php";
include "../src/controladors/ctrl_dia.php";
include "../src/controladors/error.php";
include "../src/controladors/ctrlavislegal.php";
include "../src/controladors/ctrlPoliticacookies.php";
include "../src/controladors/ctrlPoliticaprivacitat.php";

$r = $_REQUEST["r"];

/* Creem els diferents models */
$resposta = new Emeset\HTTP\Resposta();
$peticio = new Emeset\HTTP\Peticio();
$ruter = new Emeset\Ruters\RuterParam($config);

$ruter->ruta("", "ctrl_portada", "auth");
$ruter->ruta("login", "ctrlLogin");
$ruter->ruta("vlogin", "ctrlvalLogin");
$ruter->ruta("register", "ctrlRegistrar");
$ruter->ruta("clusession", "ctrlTancaSess");
$ruter->ruta("vportada", "ctrlvalPortada", "auth");
$ruter->ruta("configadmin", "ctrlConfigAdmin");
$ruter->ruta("borracita", "ctrlEliminaCita");
$ruter->ruta("dia","ctrl_dia","auth");

// Mantentiment d'usuaris 
$ruter->ruta("llistausuaris", "ctrlLlistatUsuaris", "authAdmin");
$ruter->ruta("esborrar_usuari", "ctrlEsborrarUsuari", "authAdmin");
$ruter->ruta("editar_usuari", "ctrlEditarUsuari", "authAdmin");
$ruter->ruta("actualitzar_usuari", "ctrlActualitzarUsuari", "authAdmin");
$ruter->ruta("avislegal","ctrlavislegal");
$ruter->ruta("politica_cookies","ctrlPoliticacookies");
$ruter->ruta("politica_privacitat","ctrlPoliticaprivacitat");


$ruter->ruta(RUTA_PER_DEFECTE, "ctrlError");
$resposta = $ruter->executa($peticio, $resposta);
if (isset($resposta)){
    $resposta->resposta();
}
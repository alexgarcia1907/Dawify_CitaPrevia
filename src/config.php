<?php
define("RUTA_PER_DEFECTE", 0);



$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'victor';
$config["db"]["pass"] = '2001';
$config["db"]["dbname"] = 'uf3p3_cita_previa';
$config["db"]["host"] = 'sikuu.ddns.net';

$config["hash"] = ["cost" => 12];

$config["dies"] = 34;

$festius = array(
    1 => array(1),
    2 => array(),
    3 => array(),
    4 => array(10),
    5 => array(1),
    6 => array(),
    7 => array(),
    8 => array(15),
    9 => array(),
    10 => array(12),
    11=> array(),
    12 => array(8,25)
);

$config["festius"] = $festius;


require_once "../src/emeset/http/peticio.php";
require_once "../src/emeset/http/resposta.php";
require_once "../src/emeset/ruter/ruter.php";

require_once "../src/models/tasquesPDO.php";
require_once "../src/models/usuarisPDO.php";

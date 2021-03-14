<?php

/**
    * Exemple per a M07 i M08.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Model que gestiona els usuaris amb PDO.
    *
**/

namespace Daw;

/**
    * Uusaris: model que gestiona els usuaris.
    * @author: Dani Prados dprados@cendrassos.net
    *
    * Per guardar, recuperar i gestionar els usuaris.
    *
**/
class UsuarisPDO
{

    private $sql;

    /**
     * __construct:  Crear el model usuaris
     *
     * Model adaptat per PDO
     *
     * @param array $config paràmetres de configurció del model
     *
    **/
    public function __construct($config)
    {
        $dsn = "mysql:dbname={$config['dbname']};host={$config['host']}";
        $usuari = $config['user'];
        $clau = $config['pass'];

        try {
            $this->sql = new \PDO($dsn, $usuari, $clau);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    /**
      * afegir:  afegeix una tasca
      *
      * @param $tasca string amb la tasca.
      *
    **/
    public function afegir($dadesusuari) {
        $query = $this ->sql -> prepare('insert into usuari (nom,correu,contrasenya) values (:nom,:correu,:contrasenya);');

        $result = $query -> execute([':nom' => $dadesusuari["nom"],
        ':correu' => $dadesusuari["correu"],
        ':contrasenya' => $dadesusuari["contrasenya"]]);
        if ($query->errorCode() !== '00000') {
            $err = $query->errorInfo();
            $code = $query->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} ");
        }
    }

    public function getdades($nomusuari) {
        $dades = [];

        $query =$this->sql->prepare('select * from usuari where nom =  :nom;');
        $result = $query->execute([':nom' => $nomusuari]);

        while ($value =$query-> fetch(\PDO::FETCH_ASSOC)) {
            $dades[] = $value;
        }
        return $dades;
    }

    public function getid($nomusuari){
        $query =$this->sql->prepare('select id from usuari where nom = :nom;');
        $result = $query->execute([':nom' => $nomusuari]);
        return $query->fetch(\PDO::FETCH_ASSOC)["id"];
    }

    public function getrol($nomusuari) {
        $query =$this->sql->prepare('select rol from usuari where nom = :nom;');
        $result = $query->execute([':nom' => $nomusuari]);
        return $query->fetch(\PDO::FETCH_ASSOC)["rol"];
    }

    public function gettots() {
        $query =$this->sql->prepare('select * from usuari;');
        $result = $query->execute();
        $dades = [];
        while ($value = $query -> fetch(\PDO::FETCH_ASSOC)) {
            $dades[] = $value;
        }
        return $dades;
    }   

    public function borrarusuari($id){
        $query =$this->sql->prepare('delete from usuari where id = :id;');
        $result = $query->execute([':id' => $id]);
    }

    public function actualitzar($id, $correu, $rol)
    {
        $query = $this->sql->prepare('update usuari set correu = :correu, rol = :rol  where id = :id;');
        $result = $query->execute([':id' => $id, ":correu" => $correu, ":rol" => $rol]);
        if ($query->errorCode() !== '00000') {
            $err = $query->errorInfo();
            $code = $query->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} ");
        }
    }
}

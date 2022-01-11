<?php

require_once 'config.php';

class DB {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    public $link;
    public $error;
    public $dato;

    public function __construct() {
        $this->connectDB();
    }
    private function connectDB() {
        $this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
        if(!$this->link) {
            $this->error = 'Conexión fallida'.$this->link->connecterror;
        }
    }
    public function select($query) {
        $result = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function filtrado($dato) {
        $dato = trim($_POST['']);
    }
}

//$db = 'mysql';              // Indica el tipo de motor de datos
//$host = 'localhost';        // Indica el host
//$name = 'inner';            // Indica el nombre de la base de datos
//$root = 'root';             // Indica el nombre de usuario de la base de datos
//$pass = '';                 // Indica la contraseña de usuario de la base de datos
//$con = new mysqli($host,$root,$pass,$name);
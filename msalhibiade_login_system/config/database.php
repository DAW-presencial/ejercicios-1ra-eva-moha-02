<?php
// used to get pgsql database connection
class Database{
    // specify your own database credentials
    private $host = "randion.es";
    private $db_name = "msalhibiade_login_system";
    private $username = "msalhibiade";
    private $password = "Secretos.2023";
    public $conn;
    // get the database connection
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);

        }catch(PDOException $exception){
            echo "Error de conexion: " . $exception->getMessage();
        }
        return $this->conn;
    }
}


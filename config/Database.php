<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "registration_db"; 
    public $conn;

    public function getConnection() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        return $this->conn;
    }
}
?>
<?php
class Database{
    //create object have must add modifiter
    private $dsn = "mysql:
                    dbname=php2018;
                    host=localhost;
                    charset=utf8";
    private $username = "root";
    private $password = "";
    public $conn; //*******************

    public function getConnection(){
        $this->conn=null;
        try{
            $this->conn = new PDO(
                $this->dsn, 
                $this->username, 
                $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
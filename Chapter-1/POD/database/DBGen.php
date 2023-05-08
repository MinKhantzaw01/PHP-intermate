<?php
class DBGen{
    const DB_HOST="localhost";
    const DB_NAME="resturant";
    const DB_USER="root";
    const DB_PASS="";

    private $conn;
    private static $instance;

    private function __construct()
    {
     try{
        $this->conn=new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME,self::DB_USER,self::DB_PASS);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if($this->conn){
            echo "database connection success <hr>";
        }
     }catch(Exception $e){
        echo "Customer Error ".$e->getMessage();

     }
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new DBGen();
        }
        return self::$instance;
    }
    public function getCon(){
        return $this->conn;
    }
}




?>
<?php
class Index
{
    const DB_HOST = "localhost";
    const DB_NAME = "brighter";
    const DB_USER = "root";
    const DB_PASS = "";
    public $con;

    public function __construct(){
        $this->con = new PDO('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME, self::DB_USER, self::DB_PASS);
        $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if($this->con){
            echo "database successfully connect";
        }else{
            echo "database connect Fail!";
        }
    }
}
$ind=new Index;

?>
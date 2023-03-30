<?php
require_once "DBGen.php";
class DAL{
    private $db;
    public function __construct()
    {
        $this->db=DBGen::getInstance()->getCon();
    }
    public function getSingleShop($id){
        $stmt=$this->db->prepare("SELECT * FROM shops WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $stmt->bindColumn("name",$name);
        $stmt->bindColumn("ipadd",$ipadd);
        $result=$stmt->fetchObject();

        echo $result->name."<br>".$result->ipadd;
    }
    public function getMultipleShop($state){
        $stmt=$this->db->prepare("SELECT * FROM shops WHERE state=:state");
        $stmt->bindParam(":state",$state);
        $result=$stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach($result as $item){
            echo $item->name ."<br>";
            echo $item->ipadd ."<br>";
            echo $item->username ."<br>";
            echo "<hr>";
        }
    }
}



?>
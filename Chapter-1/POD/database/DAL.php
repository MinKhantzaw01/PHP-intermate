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
    public function singleShopInsert($name,$ipadd,$username,$password,$state){
        $date=date("Y-m-d H:m:s");
        $stmt=$this->db->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
                VALUES (:name,:ipadd,:username,:password,:state,:date)");
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":ipadd",$ipadd);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":password",$password);
        $stmt->bindParam(":state",$state);
        $stmt->bindParam(":date",$date);
        $result=$stmt->execute();
        $insertId=$this->db->lastInsertId();

        echo $result ? "Successfully Inserting ".$insertId : "Fail Insert Data";
    }   
    public function multipleShopInsert($shops){
        $date=date("Y-m-d H:m:s");
        $stmt=$this->db->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
                VALUES (:name,:ipadd,:username,:password,:state,:date)");
     foreach($shops as $shop){
        $stmt->bindParam(":name",$shop[0]);
        $stmt->bindParam(":ipadd",$shop[1]);
        $stmt->bindParam(":username",$shop[2]);
        $stmt->bindParam(":password",$shop[3]);
        $stmt->bindParam(":state",$shop[4]);
        $stmt->bindParam(":date",$date);
        $result=$stmt->execute();
        $insertId=$this->db->lastInsertId();

        echo $result ? "Successfully Inserting ".$insertId ."<hr>": "Fail Insert Data<hr>";
        }   
    }
    public function updateShop($name,$id){
        $stmt=$this->db->prepare("UPDATE shops SET name=:name WHERE id=:id");
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":id",$id);
        $result=$stmt->execute();
        echo $result ? "Update Success!":"Update Fail!";
    }
    public function deleteShop($id){
        $stmt=$this->db->prepare("DELETE FROM shops WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $result=$stmt->execute();
        echo $result ? "Delete Success!":"Delete Fail!";
    }
    public function joinData($shopid){
        $stmt=$this->db->prepare("
            SELECT 
                sh.name as name,
                sh.ipadd as ipadd,
                SUM(od.price * od.amount) as total
            FROM
                shops as sh
            LEFT JOIN 
                orders as od
            ON
                od.shopid = sh.id
            WHERE
                sh.id=:id AND sh.state=1         
        ");
        $stmt->bindParam(":id",$shopid);
        $stmt->execute();
        $stmt->bindColumn("name",$name);
        $stmt->bindColumn("ipadd",$ipadd);
        $stmt->bindColumn("total",$total);
        $result=$stmt->fetchObject();

        echo "Shop Name is => " .$result->name."<hr>";
        echo "IP Address is => " .$result->ipadd."<hr>";
        echo "Total => " .$result->total;

    }
}



?>
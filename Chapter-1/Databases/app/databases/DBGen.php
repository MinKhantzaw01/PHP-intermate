<?php
namespace app\databases;
class DBGen{
    const DB_HOST="localhost";
    const DB_USER="root";
    const DB_PASS="";
    const DB_NAME="resturant";

    private $conn;

    public function __construct()
    {
        $this->conn=new \mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);
    }
    public function getSingleShop($id){
        $stmt=$this->conn->prepare("SELECT * FROM shops WHERE id=?");
        $stmt->bind_param('i',$id);
        $result=$stmt->execute();
        $stmt->bind_result($id,$name,$ipadd,$username,$password,$state,$created_at);
        while($stmt->fetch()){
            echo $id."<hr>".$name."<hr>".$ipadd."<hr>".$username."<hr>".$password."<hr>".$state."<hr>".$created_at;
        }
    }
    public function getMutipleShop($state){
        $stmt=$this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param("i",$state);
        $result=$stmt->execute();
        $stmt->bind_result($id,$name,$ipadd,$username,$password,$state,$created_at);
        while($stmt->fetch()){
            echo $id."<br>".$name."<br>".$ipadd."<br>".$username."<br>".$password."<br>".$state."<br>".$created_at;
            echo "<hr>";
        }
    }
    public function getAllShop(){
        $result=$this->conn->query("SELECT * FROM shops");
        while($row=$result->fetch_object()){
            echo $row->name." " .$row->ipadd."<hr>";
        }
    }
    public function fetchAllShop($state){
        $stmt=$this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param("i",$state);
        $stmt->execute();
        $result=$stmt->get_result();
        $data=$result->fetch_all();

        foreach($data as $item){
            echo $item[1]."<hr>";
        }

    }
    public function insertSingleShop($name,$ipadd,$username,$password,$state){
        $date=date("Y-m-d H:m:s");
        $stmt=$this->conn->prepare("INSERT INTO shops(name,ipadd,username,password,state,created_at)
                VALUES(?,?,?,?,?,?)");
        $stmt->bind_param("ssssis",$name,$ipadd,$username,$password,$state,$date);
        $result=$stmt->execute();
        echo $result ? "Data Insert Successfully!" : "Data Insert Fail!";
    }
    public function insertMultipleShop($shop){
        $date=date("Y-m-d H:m:s");
        $stmt=$this->conn->prepare("INSERT INTO shops(name,ipadd,username,password,state,created_at)
                VALUES (?,?,?,?,?,?) ");
        foreach($shop as $shops){
            $stmt->bind_param("ssssis",$shops[0],$shops[1],$shops[2],$shops[3],$shops[4],$date);
            $result=$stmt->execute();
            $lastinsertid=$stmt->insert_id;
            echo "Successfully insert ".$shops[0]. " with id of ".$lastinsertid;
            echo "<hr>";
        }
    }
    public function updateShop($shopid,$name){
        $stmt=$this->conn->prepare("UPDATE shops SET name=? WHERE id=?");
        $stmt->bind_param("si",$name,$shopid);
        $result=$stmt->execute();
        echo $result ? "Successfully Update" : "Fail Update";
    }
    public function deleteShop($shopid){
        $stmt=$this->conn->prepare("DELETE FROM shops WHERE id=?");
        $stmt->bind_param("i",$shopid);
        $result=$stmt->execute();
        echo $result ? "Delete complete" : "Delete Fail";
    }
    public function getJoinData($state){
        $stmt=$this->conn->prepare("
        SELECT
            od.id as order_id,
            sh.name as shop_name,
            dh.name as dish_name,
            (od.price * od.amount) as total,
            od.created_at as date
        FROM
            orders as od
        LEFT JOIN
            shops as sh
        ON
            sh.id=od.shopid
        INNER JOIN
            dishes as dh
        ON
            dh.id=od.dishid
        WHERE
            od.state=?
        ");
        $stmt->bind_param("i",$state);
        $result=$stmt->execute();
        $stmt->bind_result($orderid,$shopname,$dishname,$total,$date);
        while($stmt->fetch()){
            echo $orderid."<br>".$shopname."<br>".$dishname."<br>".$total."<br>".$date;
            echo "<hr>";
        }
    }

}





?>
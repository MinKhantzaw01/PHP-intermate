<?php

use app\databases\DBGen;

require_once "vendor/autoload.php";
class Index{
    private $db;
    public function __construct()
    {
        $shop=[
            ["Apple","192.168.015","apple","123",1],
            ["Microsolf","192.168.016","microsolf","123",1],
            ["Redmi","192.168.017","redmi","123",1],
            ["Blackberry","192.168.018","blackberry","123",1]
        ];
        $this->db=new DBGen();
        // $this->db->getSingleShop(1);
        // $this->db->getMutipleShop(1);
        // $this->db->getAllShop(1);
        // $this->db->insertSingleShop("Xiaomi","192.168.014","xiaomi","123",1);
        // $this->db->insertMultipleShop($shop);
        // $this->db->updateShop(8,"XELLO");
        // $this->db->deleteShop(8);
        // $this->db->getJoinData(1);
        $this->db->fetchAllShop(1);
        

    }
}

new Index;

?>
<?php
require_once "database/DAL.php";
class Index{
    public function __construct(){
        $dal=new DAL();
        $dal->getMultipleShop(1);
        
    }
}
new Index;
?>
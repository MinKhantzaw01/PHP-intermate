<?php
require_once "database/DAL.php";
class Index{
    public function __construct(){
        $dal=new DAL();
        $shops=[
            ["Oppo","192.168.109","oppo","123",1],
            ["Citizen","192.168.108","citizen","123",1],
            ["Samsung","192.168.108","samsung","123",1],
            ["Toshiba","192.168.108","toshiba","123",1]
        ];
        $dal->joinData(1);
        
    }
}
new Index;
?>
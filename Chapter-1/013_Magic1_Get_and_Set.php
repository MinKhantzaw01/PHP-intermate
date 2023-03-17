<?php
class Get{
    public function __get($var){
        echo "I am get Function " .$var."<hr>";
    }
    public function __set($var,$value){
        echo "My ".$var." is ".$value;
    }
}   
$obj=new Get;
$obj->mgmg;
$obj->name="aungaung";
?>
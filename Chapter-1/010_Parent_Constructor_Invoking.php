<?php
class Member{
    var $name="Mg Mg";
    public function __construct(){
        echo "Papa is starting Working <br>";
    }
}
class Parent_Constructor_Invoking extends Member{
    var $mine="Min Min";
    public function __construct(){
        parent::__construct();
        echo "Child is starting working<br>";
    }
}
$obj=new Parent_Constructor_Invoking();
echo $obj->name;
echo "<br>";
echo $obj->mine;
?>
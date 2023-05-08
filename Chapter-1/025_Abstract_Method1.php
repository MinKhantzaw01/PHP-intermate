<?php
abstract class Papa{
    public $name="Mg Mg";
    public function doIt(){
        echo "I am doing it! <hr>";
    }
    public abstract function myName();
}
class Index extends Papa{
    public  function MyName(){
        echo "My Name Is Mg Mg <hr>";
    }
}
$ind=new Index();
$ind->myName();
$ind->doIt();

?>
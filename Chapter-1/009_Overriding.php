<?php
class Member{
    var $name ="Mg Mg";
    public function doIt(){
        echo "I am doIt function";
    }
    public function friendCount(){
        echo "You and me are friend";
    }
}
class Overriding extends Member{
    public function friendCount(){
        $this->name="Aung Aung";
        echo "I am Overriding and you ". $this->name;
    }
}
$obj=new Overriding();
$obj->doIt();
echo "<br>";
$obj->friendCount();

?>
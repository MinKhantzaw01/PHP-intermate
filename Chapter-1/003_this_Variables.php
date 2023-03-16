<?php
class this_Variables{
    public $name="Mg Mg";
    public function changeName(){
        $this->name="Aung Aung";
    }
}
$obj=new this_Variables();
$obj->changeName();
echo $obj->name;
echo "<br>";

$bb=new this_Variables();
echo $bb->name;


?>
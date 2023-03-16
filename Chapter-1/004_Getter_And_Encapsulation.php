<?php
class Getter_And_Encapsulation{
    private $name="Mg Mg";
    public function getter(){
        return $this->name;
    }
}
$obj=new Getter_And_Encapsulation();
echo $obj->getter();

?>
<?php
class Setter_And_Getter{
    private $name="Mg Mg";
    public function setter($data){
        $this->name=$data;
    }
    public function getter(){
        return $this->name;
    }
}

$obj=new Setter_And_Getter();
$obj->setter("Aung Aung");
echo $obj->getter();



?>
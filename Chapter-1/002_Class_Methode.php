<?php
class Class_Methode{
    var $name="Mg Mg";
    public function hey($name){
        echo "Xello World".$name;
    }
}
$obj=new Class_Methode();
echo $obj->hey(" Mingalarpar");
echo "<br>";
echo $obj->name;

?>
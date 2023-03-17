<?php
trait Member{
    var $name="Mg Mg";
    public function doIt(){
        echo "I am doIt function";
    }
}
trait Gmember{
    var $age=30;
    public function age(){
        echo "My age is 30";
    }
}
class admin{
    use Member,Gmember;
}
$obj=new admin();
echo $obj->name;
echo "<br>";
echo $obj->age;
echo "<br>";
$obj->doIt();
echo "<br>";
$obj->age();

?>
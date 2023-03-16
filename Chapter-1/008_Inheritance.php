<?php
class Member{
    var $name="Mg Mg";
    var $age=13;
    var $subject="HTML";
    public function friendCount(){
        echo "I am your friend";
    }
}
class GoldenMember extends Member{

}
$obj=new GoldenMember();
echo $obj->name;
?>
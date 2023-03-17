<?php
class One{
    public function className(){
        return __CLASS__;
    }
    public function getname(){
        echo static::className();
    }
}

class Two extends One{
    public function className(){
        return __CLASS__;
    }
}

$obj=new One();
$obj->getname();

echo "<hr>";

$obb=new Two();
$obb->getname();
?>
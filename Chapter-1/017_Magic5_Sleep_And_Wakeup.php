<?php
class Index{
    public function __sleep(){
        echo "You are trying to serialize object!<hr>";
        return [];
    }
    public function __wakeup(){
        echo "You are trying to unserialize object!";
    }
}
$obj=new Index;
$aa=serialize($obj);
$bb=unserialize($aa);


?>
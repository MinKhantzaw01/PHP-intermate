<?php
class Index{
    public function __isset($var){
        echo "Property is ".$var." (isset)<hr>";
    }
    public function __unset($var){
        echo "Property is ".$var." (unset)";
    }
}

$obj=new Index;
isset($obj->mgmg);
unset($obj->aungaung);
?>
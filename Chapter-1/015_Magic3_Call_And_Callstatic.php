<?php
class Index{
    public function __call($method,$values){
        echo $method. "have ";
        echo "<pre>".print_r($values,true)."</pre>";
    }
    public static function __callStatic($name,$arrguments){
        echo $name."have";
        echo "<pre>".print_r($arrguments,true)."</pre>";

    }
}
$obj=new Index;
$obj->hey("MM","KK","ZZ");

Index::hello(11,22,33,44);
?>
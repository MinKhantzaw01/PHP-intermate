<?php
$ary=[1=>"One",2=>"Two",3=>"Three",4=>"Four"];
function fonky($value,$key){
    echo "Key is => ".$key." Value is => ".$value."<hr>";
}
array_walk($ary,"fonky");

?>
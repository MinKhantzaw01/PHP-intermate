<?php
$num=20;
function doIt($var){
    $var();
} 
$ss=function() use($num){
    echo "I am Closure {$num}";
};
doIt($ss);
?>
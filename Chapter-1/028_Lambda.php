<?php
function doIt($para1,$para2,$para3){
    $total=$para1+$para2;
    $para3($total);
}
$ss=function($var){
    echo "I am Lambda {$var}";
};
doIt(10,20,$ss);

?>
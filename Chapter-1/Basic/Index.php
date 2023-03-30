<?php
require_once "Member.php";

$rp=new ReflectionProperty('App\Member','detailInfo');
$mem=new App\Member();
$rp->setAccessible(true);
showData($rp->getValue($mem));
//Method
// $rm=new ReflectionMethod('App\Member','getdetailInfo');

// $mem=new App\Member();
// $rm->invokeArgs($mem,['123',"HELLO"]);
// echo $rm->invokeArgs($mem,['123',"HELLO"]);

//Class
// $member=new App\Member();
// $rc=new ReflectionClass('App\Member');

// echo $rc->getName();
// echo "<hr>";
// echo $rc->getShortName();
// echo "<hr>";
// echo $rc->getNamespaceName();
// echo "<hr>";
// echo $rc->hasMethod('detailInfo');
// echo "<hr>";
// echo $rc->isTrait()?"It is a Trait":"It is not a Trait";
// echo "<hr>";

// showData(get_class_methods($rc));

// function showData($ary){
//     echo "<pre>".print_r($ary,true)."</pre>";
// }
showData(get_class_methods($rp));

function showData($ary){
    echo "<pre>".print_r($ary,true)."</pre>";
}
?>
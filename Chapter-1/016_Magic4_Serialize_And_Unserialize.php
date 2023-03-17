<?php
$ary =[
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"]
];

$data=serialize($ary);
echo "<pre>".print_r($data,true)."</pre><hr>";
$normal=unserialize($data);
echo "<pre>".print_r($normal,true)."</pre>";

?>
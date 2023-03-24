<?php

function doIt(...$var){
    echo $var[0] ?? "Hello World";
}

doIt();

?>
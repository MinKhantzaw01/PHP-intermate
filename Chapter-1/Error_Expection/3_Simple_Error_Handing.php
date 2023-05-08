<?php
class MyErrorClass extends Exception{

}
function MyErrorHandler($erCode,$erMessage,$file,$lineNum){
    echo "Error Message => ".$erMessage ."<br>";
    echo "Error Code => ".$erCode ."<br>";
    echo "Error File => ".$file ."<br>";
    echo "Error  Line Number=> ".$lineNum ."<hr>";
    throw new MyErrorClass($erMessage,$erCode);
}
set_error_handler("MyErrorHandler");
try{
    include "HELLO.txt";
}catch(Exception $e){
    echo $e->getMessage();
    echo "<br>";
    echo $e->getCode();
    echo "<br>";
    echo $e->getLine();
}

?>